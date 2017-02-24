$(document).ready(function(){

    $('.operation').on('click', function(){
       var $this = $(this);
       var val1 = parseFloat($('#val1').val());
       var val2 = parseFloat($('#val2').val());
       var answer;
       if($this.hasClass('plus')){
           answer = val1 + val2;
       }
       if($this.hasClass('subtract')){
           answer = val1 - val2;
       }
        if($this.hasClass('multiply')){
            answer = val1 * val2;
        }
        if($this.hasClass('divide')){
            answer = val1 / val2;
        }

        $('#answer').html(answer);

    });
});
