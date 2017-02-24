$(document).ready(function(){

    $('.operation').on('click', function(){
        var $this = $(this);
        var val1 = parseFloat($('#val1').val());
        var val2 = parseFloat($('#val2').val());
        var answer;
        if($this.hasClass('plus')){
//            answer = val1 + val2;
            $.request('onDoPlus', {
                data: {number1: val1,number2: val2},
//                dataType: "String",
                success: function(data) {
                    
                    console.log(data);
                    ansHtml(data.data);
                }
            });
        }
        if($this.hasClass('subtract')){
//            answer = val1 - val2;
//            ansHtml(answer);
            $.request('onDoMinus', {
                data: {number1: val1,number2: val2},
//                dataType: "String",
                success: function(data) {
                    
                    console.log(data);
                    ansHtml(data.data);
                }
            });
        }
        if($this.hasClass('multiply')){
//            answer = val1 * val2;
//            ansHtml(answer);
            $.request('onDoMultiply', {
                data: {number1: val1,number2: val2},
//                dataType: "String",
                success: function(data) {
                    
                    console.log(data);
                    ansHtml(data.data);
                }
            });
        }
        if($this.hasClass('divide')){
//            answer = val1 / val2;
//            ansHtml(answer);
            $.request('onDoDivided', {
                data: {number1: val1,number2: val2},
//                dataType: "String",
                success: function(data) {
                    
                    console.log(data);
                    ansHtml(data.data);
                }
            });
        }
        

    });
    
    function ansHtml(answer){
        $('#answer').html(answer);
    }
    
});
