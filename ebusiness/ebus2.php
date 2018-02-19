<?php
//start the session
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        
        <title> Enter Details</title>
        
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    
    <body style="background-color:powderblue;">
        <h4>Please enter your Personal Details.</h4>
            <br/>
               <form method = "POST" action = "Ebus3.php">
                   <label for="name">
                       First Name
                        <input type="name" id="name" placeholder="First Name" minlength="2">
                   </label>
                 
                   
                   <br/>
            
                   <label for="lastname">
                       Last Name
                   </label>
                   <input type="lastname" id="last_name" placeholder="Last Name" minlength="2">
                   <br/>
                   <label for="address">
                       Address
                   </label>
                   <input type="address" id="address" placeholder="Address" minlength="2">
        
        <h4>Please enter your payment details.</h4>
        
            <br />
            
            <form method = "POST" action = "Ebus3.php">
                
                <label for="user_pin">
                     PIN 
                </label>
                
                <input type="password" id="user_pin" placeholder="Card Pin" maxlength="4">
                    
                <button type="Submit" id="btnPurchase" disabled> 
                    Proceed with Purchase 
                </button>
                
            </form>
            
            <br />
            
            <button onClick="validateDetails()"> Validate </button>
            
            <?php
            //set session variable 
            $_SESSION["total"]=$_POST["total"];
            $_SESSION["name"]=$_POST["name"];
            ?>
        
        <script type="text/javascript" src="ebus2_validator.js"></script>
        
        
    </body>
    
    
    
</html>