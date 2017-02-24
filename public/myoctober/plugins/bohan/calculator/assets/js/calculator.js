$(document).ready(function(){

    $('#plusId').request('onDoPlus', {data: {number1: $("#number1").val(),number2: $("#number2").val()},
        success: function(data) {
            printAws(data);
        }
    });
    $('#minusId').request('onDoMinus', {data: {number1: $("#number1").val(),number2: $("#number2").val()},
        success: function(data) {
            printAws(data);
        }
    });
    $('#multiplyId').request('onDoMultiply', {data: {number1: $("#number1").val(),number2: $("#number2").val()},
        success: function(data) {
            printAws(data);
        }
    });
    $('#dividedId').request('onDoDivided', {data: {number1: $("#number1").val(),number2: $("#number2").val()},
        success: function(data) {
            printAws(data);
        }
    });
    function printAws(aws){
        $("#awsId").html(aws);
    }
});
