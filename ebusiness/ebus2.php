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
    
    <body style="background-color:lightgrey;">
        <style>/* Centered text */
.centered {
    position: absolute;
    top: 20%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-style: sans-serif;
  
}</style>
            
        </style>
          <div class="container1">
            <img src="https://www.surfertoday.com/images/stories/breakingwave.jpg" alt="wave" width="1440" height="250" >
           <div class="centered"><h1>Please enter your Personal Details.</h1></div>
       
       
     
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
                <label for="user_number">
                     Card Number
                </label>
                <input  id="user_number" placeholder="Card Number" maxlength="16">
                <br/>
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