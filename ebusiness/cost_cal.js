/* global $ */

function calcSub(){
    
    var argSubTotal;
    var argDiscount;
    var argVat;
    var argtotal;
    
if(document.getElementById("salesforce").checked) {
    argSubTotal = 100;
    argDiscount = (100) *.05;
    argVat = (100)*.1;
    argtotal = argSubTotal - argDiscount + argVat;
    
} else if (document.getElementById("cloud9").checked) {
    argSubTotal = 300;
    argDiscount = (300) *.05;
     argVat = (300)*.1;
      argtotal = argSubTotal - argDiscount + argVat;
} else if (document.getElementById("amazon").checked) {
    argSubTotal = 200;
    argDiscount = (200) *.05;
     argVat = (200)*.1;
      argtotal = argSubTotal - argDiscount + argVat;
} else  {
     argSubTotal = 150;
     argDiscount = (150) *.05;
     argVat = (150)*.1;
      argtotal = argSubTotal - argDiscount + argVat;
     
}
display(argSubTotal);
display(argDiscount);
display(argVat);
display(argtotal)
}

function display(parm1){
    document.getElementById("subtotal").value = parm1;
    document.getElementById("discount").value = parm1;
     document.getElementById("vat").value = parm1;
    document.getElementById("total").value = parm1;
       
       enablebtnProceed();
       
}


    function enablebtnProceed(){
        $('#btnProceed').prop('disabled', false);
    }
    
    function disablebtnProceed(){
          $('#btnProceed').prop('disabled', true);
 }
