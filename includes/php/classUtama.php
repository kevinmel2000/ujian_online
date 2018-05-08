<?php
    class classUtama {

        var $session_name;
        var $db_host;
        var $db_user;
        var $db_pass;
        var $field;
        var $db_name;
        var $tabelDB ;
        var $fieldArr;

        public function classUtama($session_name = "") {
            session_start();
            $this->session_name = strlen($session_name)==0?SESSION_NAME:$session_name;
            $this->db_host = DB_HOST;
            $this->db_user = DB_USER;
            $this->db_pass = DB_PASSWORD;
            $this->db_name = DB_DATABASE;
        }

        private function session_validation() {
            global $_SESSION;

            if(!isset($_SESSION[$this->session_name])) {
                die(json_encode(array("success" => false, "message" => "DILARANG MASUK!")));
            }
        }

        public function mysql_connect($bypass_session=false) {

            if(!$bypass_session) $this->session_validation();
            $this->conn = @mysql_connect($this->db_host, $this->db_user, $this->db_pass, true);
            if($this->conn) {
                if(@mysql_select_db($this->db_name, $this->conn)) {
                    return $this->conn;
                }
            }
            die("Kesalahan melakukan koneksi database!");
        }

        public function mysql_close() {
            $return = @mysql_close($this->conn);
            unset($this->conn);

            return $return;
        }

        public function mysql_query($sql, &$rec_count, &$data) {
            //echo($sql."<br />");
            $result = @mysql_query($sql);

            if ($result ) {
                $rec_count = @mysql_num_rows($result);
                $data = array();

                if ($rec_count > 0)
                    while ($row = @mysql_fetch_array($result, MYSQL_ASSOC))
                        array_push($data, $row);

                @mysql_free_result($result);
                unset($result);

                return true;
            }

            $this->mysql_getError(mysql_error());
        }

        public function mysql_execute($sql) {
            $result = @mysql_query($sql, $this->conn);

            if($result==0) {
                $this->mysql_getError(mysql_error());
            } 
            
            return mysql_affected_rows();
        }

        public function mysql_insert($tabel, $data=array(), $escapequote=array()) {
            $query = "INSERT INTO $tabel SET ";
            
            foreach($data as $item => $value )
                $query .= "$item=".(array_search($item, $escapequote)!==false?mysql_escape_string($value):"'".mysql_escape_string($value)."'").",";
            $query = rtrim($query, ",");
            
            $this->mysql_execute($query);
        }

        public function mysql_update($tabel, $data=array(), $seleksi=array(), $escapequote=array(), $seleksi_escapequote=array()) {

            $query = "UPDATE $tabel SET " ;
            foreach($data as $item => $value)
                $query .= "$item=".(array_search($item, $escapequote)!==false?mysql_escape_string($value):"'".mysql_escape_string($value)."'").",";

            $query = rtrim($query, ",").(count($seleksi)>0?" WHERE ":"");

            foreach($seleksi as $item => $value) {
                $query .= "$item";
                if(is_array($value)) {
                    $query .= " IN (";
                    foreach($value as $items => $values) {
                        $query .= (array_search($item, $escapequote)!==false?"$values":"'$values'").",";
                    }
                    $query = rtrim($query, ",").")";

                } else {
                    $query .="=".(array_search($item, $escapequote)!==false?"$value":"'$value'");
                }
                $query.=" AND ";
            }
            
            //echo(rtrim($query, "AND "));
            $this->mysql_execute(rtrim($query, "AND "));
        }

        public function mysql_delete($tabel, $seleksi=array(), $escapequote=array()) {
            $query = "DELETE FROM $tabel " .(count($seleksi)>0?"WHERE ":"");
            
            foreach($seleksi as $item => $value) {
                $query .= "$item";
                if(is_array($value)) {
                    $query .= " IN (";
                    foreach($value as $items => $values) {
                        $query .= (array_search($item, $escapequote)!==false?"$values":"'$values'").",";
                    }
                    $query = rtrim($query, ",").")";

                } else {
                    $query .="=".(array_search($item, $escapequote)!==false?"$value":"'$value'");
                }
                $query.=" AND ";
            }
            
            //die($sql);
            $this->mysql_execute(rtrim($query, "AND "));
        }

        private function mysql_getError($err_mesg) {
            $this->mysql_close();
            die("{success: false, message: \"$err_mesg.\"}");
        }

        public function getLastNumber($table, $field, $length=0, $prefix='', $suffix='', $seleksi=array()) {

            $sql = "SELECT MAX(CONVERT(SUBSTRING($field, LENGTH('$prefix')+1, LENGTH($field)-LENGTH('$prefix')-LENGTH('$suffix')), SIGNED))+1
                    AS LAST FROM $table WHERE 1 AND LEFT($field, LENGTH('$prefix'))='$prefix' AND RIGHT($field, LENGTH('$suffix'))='$suffix'";
            foreach($seleksi as $item => $value) {
                $sql .= " AND $item";
                if(is_array($value)) {
                    $sql .= "IN (";
                    foreach($value as $items => $values) {
                        $sql .= (array_search($item, $escapequote)!==false?"$values":"'$values'").",";
                    }
                    $sql = rtrim($sql, ",").")";

                } else {
                    $sql .="=".(array_search($item, $escapequote)!==false?"$value":"'$value'");
                }
            }
            //echo $sql;
            $this->mysql_query($sql, $rs_num, $rs);

            $last = isset( $rs[0]["LAST"])?$rs[0]["LAST"]:1;
            $length-=strlen($last);
            for($i=0; $i<$length; $i++) $last="0".$last;

            return $prefix.$last.$suffix;
        }

        public function isDuplicateId($cekId, $tabel, $kolomCekId, $exeptId="", $kolomExeptId="") {
            $kolomExeptId=strlen($kolomExeptId)==0?$kolomCekId:$kolomExeptId;
            $sql = "SELECT COUNT($kolomCekId) AS TOTAL FROM $tabel WHERE $kolomCekId='$cekId' AND $kolomExeptId<>'$exeptId'" ;
            $this->mysql_query($sql, $rs_num, $rs);

            return $rs[0]["TOTAL"]>0;
        }

        public function getFieldValue($tabel, $kolom=array(), $seleksi=array(), $escapequote=array(), $limit=0, $start=0, $orderBy="", $query="") {

            $sql = "SELECT ";
            foreach ($kolom as $key => $value) {
                $sql.="$value,";
            }
            $sql=rtrim($sql,","). " FROM $tabel WHERE 1";

            foreach($seleksi as $item => $value) {
                $sql .= " AND $item";
                if(is_array($value)) {
                    $sql .= " IN (";
                    foreach($value as $items => $values) {
                        $sql .= (array_search($item, $escapequote)!==false?mysql_escape_string($values):"'".mysql_escape_string($values)."'").",";
                    }
                    $sql = rtrim($sql, ",").")";

                } else {
                    $sql .="=".(array_search($item, $escapequote)!==false?"$value":"'$value'");
                }
            }
            if(strlen($query)>0) $sql.=" AND ". $query;
            
            if(strlen($orderBy)>0) $sql.=" ORDER BY $orderBy";
            if($limit>0) $sql.=" LIMIT $start, $limit";
            //echo($sql."<br /><br />");
            $this->mysql_query($sql, $rs_num, $result);
            return $result;
        }

        public function getDataUmum() {
            
            $sql = "SELECT * FROM umum";
            $this->mysql_query($sql, $rs_num, $data);

            return $data[0];
        }

        public function getBulanArray() {
            return array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
        }

        public function getTanggalArray() {
            
            $tglArray=array();
            for($i=0;$i<31;$i++) {
                $tgl=$i+1;
                if(strlen($tgl)==1) $tglArray[$i]="0" . $tgl;
                else $tglArray[$i]=$tgl;
            }

            return $tglArray;            
        }

        public function getTahunLahirArray() {
            for($i=0;$i<100;$i++)
                $thnArray[$i]=(date("Y")-100)+$i;
            
            return $thnArray;
        }
        
        public function getTahunArray() {
            for($i=0;$i<5;$i++)
                $thnArray[$i]=date("Y")+$i;
            
            return $thnArray;
        }
        
        public function create_kode_unik($length = 8) {

            $password = "";
            $possible = "12346789"; //bcdfghjkmnpqrtvwxyzBCDFGHJKLMNPQRTVWXYZ";
            $maxlength = strlen($possible);
            if ($length > $maxlength) $length = $maxlength;
            $i = 0;

            while ($i < $length) {
                $char = substr($possible, mt_rand(0, $maxlength-1), 1);
                if (!strstr($password, $char)) {
                    $password .= $char;
                    $i++;
                }
            }

            return $password;
        }
        
        //fungsi SEO
        public function URL_CovertString($inputString) {
            $inputString = preg_replace('~[^\\pL0-9_]+~u', '-', $inputString);
            $inputString = trim($inputString, "-");
            $inputString = iconv("utf-8", "us-ascii//TRANSLIT", $inputString);

            return preg_replace('~[^-a-z0-9_]+~i', '', $inputString);
        }
        
        public function formatTanggalIndonesia($tanggal) {
            $bulan = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
            $temp = explode("-", $tanggal);
            
            return $temp[2]." ".$bulan[$temp[1]-1]." ".$temp[0];            
        }
        
        public function dateValidation($date, $format) {
            $dt = DateTime::createFromFormat($format, $date);
            return $dt !== false && !array_sum($dt->getLastErrors());
        }
        
        public function acakpassword($psw) {
            $AcakPass = $psw;
            for ($i=1; $i<=88; $i++)
            {
               $AcakPass = md5($AcakPass);
            }
            return $AcakPass;
         }
                
        function checkIntegerRange($int, $min = 0, $max = null) {
            if (is_string($int) && !ctype_digit($int)) {
                return false; // contains non digit characters
            }
            if (!is_int((int) $int)) {
                return false; // other non-integer value or exceeds PHP_MAX_INT
            }
            if( $max == null) {
                return ($int >= $min);
            } else {
                return ($int >= $min && $int <= $max);
            }
        }
        
        function limitTextKonten($string, $limit = 500) {
            $string = strip_tags($string);
            if (strlen($string) > $limit) {

                // truncate string
                $stringCut = substr($string, 0, $limit);

                // make sure it ends in a word so assassinate doesn't become ass...
                $string = substr($stringCut, 0, strrpos($stringCut, ' ')).'...'; 
            }
            
            return $string;
        }
        
        // Time format is UNIX timestamp or
        // PHP strtotime compatible strings
        function dateDiff($time1, $time2, $precision = 6) {
            //die($time1."----".$time2);
            // If not numeric then convert texts to unix timestamps
            if (!is_int($time1)) {
                $time1 = strtotime($time1);
            }
            if (!is_int($time2)) {
                $time2 = strtotime($time2);
            }

            // If time1 is bigger than time2
            // Then swap time1 and time2
            if ($time1 > $time2) {
                $ttime = $time1;
                $time1 = $time2;
                $time2 = $ttime;
            }

            // Set up intervals and diffs arrays
            $intervals_indo = array('tahun','bulan','hari','jam','menit','detik');
            $intervals = array('year','month','day','hour','minute','second');
            $diffs = array();

            // Loop thru all intervals
            foreach ($intervals as $interval) {
                // Create temp time from time1 and interval
                $ttime = strtotime('+1 ' . $interval, $time1);
                // Set initial values
                $add = 1;
                $looped = 0;
                // Loop until temp time is smaller than time2
                while ($time2 >= $ttime) {
                    // Create new temp time from time1 and interval
                    $add++;
                    $ttime = strtotime("+" . $add . " " . $interval, $time1);
                    $looped++;
                }

                $time1 = strtotime("+" . $looped . " " . $interval, $time1);
                $diffs[$interval] = $looped;
                if($looped>0) break;
            }
    
            $count = 0;
            $times = array();
            // Loop thru all diffs
    
            foreach ($diffs as $interval => $value) {
                // Break if we have needed precission
                if ($count >= $precision) {
                    break;
                }
                // Add value and interval 
                // if value is bigger than 0
                if ($value > 0) {
                    // Add s if value is not 1
                    /*if ($value != 1) {
                        $interval .= "s";
                    }*/
                    
                    // Add value and interval to times array
                    $times[] = $value . " " . $intervals_indo[array_search($interval, $intervals)] . " lalu";
                    $count++;
                }
            }

            // Return string with times
            return implode(", ", $times);
        }
        
        public function exportToExcel($root, $sql) {
            global $_SESSION;

            include $root . "/includes/php/excelwriter.inc.php";
            $fname =  "export-" . date("Y") . date("m") . date("d");
            $fileName = realpath($root) . "/temp/" . $fname  . ".xls";
            $excel = new ExcelWriter($fileName);

            if($excel==false) return null;
            if ($result = @mysql_query($sql)){
                $rec_count = @mysql_num_rows($result);
                $title = array();
                $data = array();

                if ($rec_count > 0) {
                    $i=0;
                    while ($row = @mysql_fetch_array($result, MYSQL_ASSOC)) {
                        $j=0;
                        foreach($row as $kolom => $value_array) {
                            if($i==0) $title[$j]=$kolom;
                            $data[$j] = $value_array;

                            $j++;
                        }
                        if($i==0) $excel->writeLine($title);
                        $excel->writeLine($data);
                        $i++;
                    }
                }
                @mysql_free_result($result);
                unset($result);

                $excel->close();
                if(count($data)>0)
                    return $fname;
                else
                    return null;

            } else {
                $excel->close();
                $error = mysql_error();
                return null;
            }
        }
        
        public function sendEmail($email_to, $to_alias, $subject, $detail_message, $email_from, $from_alias) {
            $message = '
                <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
                <html xmlns="http://www.w3.org/1999/xhtml">
                    <head>
                        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
                        <meta name="format-detection" content="telephone=no" />

                        <title>'.$subject.'</title>
                        <style type="text/css">
                                /* RESET STYLES */
                                html { background-color:#E1E1E1; margin:0; padding:0; }
                                body, #bodyTable, #bodyCell, #bodyCell{height:100% !important; margin:0; padding:0; width:100% !important;font-family:Helvetica, Arial, "Lucida Grande", sans-serif;}
                                table{border-collapse:collapse;}
                                table[id=bodyTable] {width:100%!important;margin:auto;max-width:500px!important;color:#7A7A7A;font-weight:normal;}
                                img, a img{border:0; outline:none; text-decoration:none;height:auto; line-height:100%;}
                                a {text-decoration:none !important;border-bottom: 1px solid;}
                                h1, h2, h3, h4, h5, h6{color:#5F5F5F; font-weight:normal; font-family:Helvetica; font-size:20px; line-height:125%; text-align:Left; letter-spacing:normal;margin-top:0;margin-right:0;margin-bottom:10px;margin-left:0;padding-top:0;padding-bottom:0;padding-left:0;padding-right:0;}

                                /* CLIENT-SPECIFIC STYLES */
                                .ReadMsgBody{width:100%;} .ExternalClass{width:100%;} /* Force Hotmail/Outlook.com to display emails at full width. */
                                .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div{line-height:100%;} /* Force Hotmail/Outlook.com to display line heights normally. */
                                table, td{mso-table-lspace:0pt; mso-table-rspace:0pt;} /* Remove spacing between tables in Outlook 2007 and up. */
                                #outlook a{padding:0;} /* Force Outlook 2007 and up to provide a "view in browser" message. */
                                img{-ms-interpolation-mode: bicubic;display:block;outline:none; text-decoration:none;} /* Force IE to smoothly render resized images. */
                                body, table, td, p, a, li, blockquote{-ms-text-size-adjust:100%; -webkit-text-size-adjust:100%; font-weight:normal!important;} /* Prevent Windows- and Webkit-based mobile platforms from changing declared text sizes. */
                                .ExternalClass td[class="ecxflexibleContainerBox"] h3 {padding-top: 10px !important;} /* Force hotmail to push 2-grid sub headers down */

                                /* /\/\/\/\/\/\/\/\/ TEMPLATE STYLES /\/\/\/\/\/\/\/\/ */

                                /* ========== Page Styles ========== */
                                h1{display:block;font-size:26px;font-style:normal;font-weight:normal;line-height:100%;}
                                h2{display:block;font-size:20px;font-style:normal;font-weight:normal;line-height:120%;}
                                h3{display:block;font-size:17px;font-style:normal;font-weight:normal;line-height:110%;}
                                h4{display:block;font-size:18px;font-style:italic;font-weight:normal;line-height:100%;}
                                .flexibleImage{height:auto;}
                                .linkRemoveBorder{border-bottom:0 !important;}
                                table[class=flexibleContainerCellDivider] {padding-bottom:0 !important;padding-top:0 !important;}

                                body, #bodyTable{background-color:#E1E1E1;}
                                #emailHeader{background-color:#E1E1E1;}
                                #emailBody{background-color:#FFFFFF;}
                                #emailFooter{background-color:#E1E1E1;}
                                .nestedContainer{background-color:#F8F8F8; border:1px solid #CCCCCC;}
                                .emailButton{background-color:#205478; border-collapse:separate;}
                                .buttonContent{color:#FFFFFF; font-family:Helvetica; font-size:18px; font-weight:bold; line-height:100%; padding:15px; text-align:center;}
                                .buttonContent a{color:#FFFFFF; display:block; text-decoration:none!important; border:0!important;}
                                .emailCalendar{background-color:#FFFFFF; border:1px solid #CCCCCC;}
                                .emailCalendarMonth{background-color:#205478; color:#FFFFFF; font-family:Helvetica, Arial, sans-serif; font-size:16px; font-weight:bold; padding-top:10px; padding-bottom:10px; text-align:center;}
                                .emailCalendarDay{color:#205478; font-family:Helvetica, Arial, sans-serif; font-size:60px; font-weight:bold; line-height:100%; padding-top:20px; padding-bottom:20px; text-align:center;}
                                .imageContentText {margin-top: 10px;line-height:0;}
                                .imageContentText a {line-height:0;}
                                #invisibleIntroduction {display:none !important;} /* Removing the introduction text from the view */

                                /*FRAMEWORK HACKS & OVERRIDES */
                                span[class=ios-color-hack] a {color:#275100!important;text-decoration:none!important;} /* Remove all link colors in IOS (below are duplicates based on the color preference) */
                                span[class=ios-color-hack2] a {color:#205478!important;text-decoration:none!important;}
                                span[class=ios-color-hack3] a {color:#8B8B8B!important;text-decoration:none!important;}
                                .a[href^="tel"], a[href^="sms"] {text-decoration:none!important;color:#606060!important;pointer-events:none!important;cursor:default!important;}
                                .mobile_link a[href^="tel"], .mobile_link a[href^="sms"] {text-decoration:none!important;color:#606060!important;pointer-events:auto!important;cursor:default!important;}


                                /* MOBILE STYLES */
                                @media only screen and (max-width: 480px){
                                        /*////// CLIENT-SPECIFIC STYLES //////*/
                                        body{width:100% !important; min-width:100% !important;} /* Force iOS Mail to render the email at full width. */
                                        table[id="emailHeader"],
                                        table[id="emailBody"],
                                        table[id="emailFooter"],
                                        table[class="flexibleContainer"],
                                        td[class="flexibleContainerCell"] {width:100% !important;}
                                        td[class="flexibleContainerBox"], td[class="flexibleContainerBox"] table {display: block;width: 100%;text-align: left;}				
                                        td[class="imageContent"] img {height:auto !important; width:100% !important; max-width:100% !important; }
                                        img[class="flexibleImage"]{height:auto !important; width:100% !important;max-width:100% !important;}
                                        img[class="flexibleImageSmall"]{height:auto !important; width:auto !important;}
                                        table[class="flexibleContainerBoxNext"]{padding-top: 10px !important;}
                                        table[class="emailButton"]{width:100% !important;}
                                        td[class="buttonContent"]{padding:0 !important;}
                                        td[class="buttonContent"] a{padding:15px !important;}

                                }

                                @media only screen and (-webkit-device-pixel-ratio:.75){
                                        /* Put CSS for low density (ldpi) Android layouts in here */
                                }

                                @media only screen and (-webkit-device-pixel-ratio:1){
                                        /* Put CSS for medium density (mdpi) Android layouts in here */
                                }

                                @media only screen and (-webkit-device-pixel-ratio:1.5){
                                        /* Put CSS for high density (hdpi) Android layouts in here */
                                }
                                /* end Android targeting */

                                @media only screen and (min-device-width : 320px) and (max-device-width:568px) {
                                }
                                /* end IOS targeting */
                        </style>
                        <!--	Outlook Conditional CSS	-->
                        <!--[if mso 12]>
                                <style type="text/css">
                                        .flexibleContainer{display:block !important; width:100% !important;}
                                </style>
                        <![endif]-->
                        <!--[if mso 14]>
                                <style type="text/css">
                                        .flexibleContainer{display:block !important; width:100% !important;}
                                </style>
                        <![endif]-->
                    </head>
                    <body bgcolor="#E1E1E1" leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0">
                        <!-- CENTER THE EMAIL // -->
                        <!--
                        1.  The center tag should normally put all the
                                content in the middle of the email page.
                                I added "table-layout: fixed;" style to force
                                yahoomail which by default put the content left.

                        2.  For hotmail and yahoomail, the contents of
                                the email starts from this center, so we try to
                                apply necessary styling e.g. background-color.
                        -->

                        '.$detail_message.'
                    </body>
                </html>';

            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";     
            $headers .= "From: ".$from_alias." <".$email_from.">\r\n";
            $headers .= "Return-Path: no-reply@sumomarket.com\r\n";
            $headers .= "To: ".$to_alias." <".$email_to.">\r\n";
            $headers .= "X-Mailer: PHP/" . phpversion();

            mail($email_to, $subject, $message, $headers);
            return true;
        }
        
    }