$( document ).ready(function() {
    var cekpoint = function() {
        setTimeout(function() {
            var data = new FormData();
            $.ajax({
                type: 'POST',
                url: home_url+'/store/notifikasi.php',
                data: data,
                cache: false,
                dataType: 'json',
                processData: false, // Don't process the files
                contentType: false, // Set content type to false as jQuery will tell the server its a query string request
                success: function(data) {

                    if(data['success']) {
                        //console.log('sebelum: '+data['data_message']);
                        if(data['is_ujian']) {
                            window.location = home_url+'/ujian/add.php';
                        }
                    }        
                    cekpoint();
                }, 
                error: function() {
                    cekpoint();
                }
            }); 
        }, 3000);
    };

    cekpoint();
});