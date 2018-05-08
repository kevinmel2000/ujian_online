(function($){
    var currency = function (nums) {

        if(!nums) return '0';
        if(nums=='') return '0';

        nums = String(nums).replace(/[\,%]/g, '');
        nums = nums.split('.').length<2?
                    nums:
                    (nums.split('.')[1].length>2?
                        String(eval(nums).toFixed(2)):
                        nums);

        if(nums=='' || nums=='0') return '0';

        while (nums.substring(0,1)=='0' && nums.substring(1,2)!='.') {
            nums = nums.substring(1,nums.length);
            if(nums=='0') return '0';
        }

        nums = nums.replace('.','. ');

        var num = nums.split('.')[0];
        var numArr=new String(num).split('').reverse();
        for (var i=3;i<numArr.length;i+=3)
            numArr[i]+=',';

        var decimal = (nums.split('.')[1]?('.'+(nums.split('.')[1]).trim()):'');

        return (numArr.reverse().join('') + decimal.replace('.00',''));
        
    };
    
    $.fn.extend({
        formatInput: function(settings) {
            var $elem = $(this);
            settings = $.extend({
                errback: null
            }, settings);
            $elem.bind("keyup.filter_input", $.fn.formatEvent);
        },
        formatEvent: function(e) {
            var elem = $(this);
            var initial_value = elem.val();
            elem.val($.fn.insertSpaces(initial_value));
        },
        insertSpaces: function(number) {
            return currency(number); //.replace(" ", "").replace(/(\d)(?=(?:\d{3})+$)/g, "$1 ");
        }
    });
    
})(jQuery);