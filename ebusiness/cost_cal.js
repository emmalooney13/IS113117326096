/* global $ */

function calcSub(){
    
    var argSubTotal;
    
if(document.getElementById("salesforce").checked) {
    argSubTotal = 100;
} else if (document.getElementById("cloud9").checked) {
    argSubTotal = 300;
} else if (document.getElementById("amazon").checked) {
    argSubTotal = 200;
} else  {
     argSubTotal = 150;
}
display(argSubTotal);
}

function display(parm1){
    document.getElementById("subtotal").value = parm1;
    
    document.getElementById("total").value = parm1;
       
       enablebtnProceed();
       
}


    function enablebtnProceed(){
        $('#btnProceed').prop('disabled', false);
    }
    
    function disablebtnProceed(){
          $('#btnProceed').prop('disabled', true);
 }
