<?php
//start session
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title> Receipt</title>
        <link rel="stylesheet" href="mystylesheet4.css" type="text/css"/>
        
         <!--jQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="number.js"></script>
      
     </head>
    <body style="background-color:lightgrey;">
        <center><Stong><h1>Receipt</h1></Stong></center>
        
         

        <div class="container">
        <?php
        //echo session variables that were set on previous page 
        echo "total is " . $_SESSION["total"] .".";
        ?>
        
         <?php
        //echo session variables that were set on previous page 
      
        echo "first name is " . $_SESSION["name"] .".";
        ?>
        </div>
    </body>
    </html>