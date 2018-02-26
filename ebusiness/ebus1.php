
<!DOCTYPE html>
<html>
    <head>
        <title>Select Product</title>
         <link rel="stylesheet" href="mystylesheet4.css" type="text/css"/>
    <!--jQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="cost_cal.js"></script>
      <link rel="stylesheet" href="mystylesheet4.css" type="text/css"/>
    
    </head>
    
    <body style="background-color:  lightgrey;">
        <div class="container1">
            
       
        <center><h4>Select A Product</h4></center>
         </div>
        <br/>
        <div class="container">
        <form method="POST" action="ebus2.php">
        
       <center><label for="Sales Force">
            <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/> 
        Sales Force @ $100
        </label>
        
        <br/>
        
        <label for="Cloud 9">
            <input type="radio" id="cloud9" name="product" checked onClick="disablebtnProceed()"/> 
        Cloud9 @ $300
        </label>
        
         <br/>
         
         <label for="Amazon">
            <input type="radio" id="amazon" name="product" checked onClick="disablebtnProceed()"/> 
        Amazon @ $200
        </label>
        
         <br/>
         
         <label for="Gmail">
            <input type="radio" id="gmail" name="product" checked onClick="disablebtnProceed()"/> 
        Gmail @ $150
        </label>
        
        <br/>
        <br/>
        
        <label for="subtotal">
            Sub Total
            <input type="text" id="subtotal" value="0.00" readonly/>
        </label>
        
        <br/>
        <label for="discount">
            Discount
            <input type="text" id="discount" value="0.00" readonly/>
        </label>
        <br/>
        
        <label for="vat">
            Vat
            <input type="text" id="vat" value="0.00" readonly/>
        </label>
        
        <br/>
        <label for="total">
            Total
            <input type="text" id="total" name="total" value="0.00" readonly/>
        </label>
        
        <br/>
        <button type="submit" id="btnProceed" diabled>Add to Shopping Cart</button>
        
        </form>
        
        <br/>
        
        <button onClick="calcSub()">Calculate Cost</button>
          <a role="button" href="Ebus1.php">Clear Choice</a></center>
          </div>
       
       
    </body>
</html>