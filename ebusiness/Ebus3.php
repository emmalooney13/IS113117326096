<?php
//start session
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title> Receipt</title>
     </head>
    <body style="background-color:powderblue;">
        <h4>Receipt</h4>
        
        <?php
        //echo session variables that were set on previous page 
        echo "total is " . $_SESSION["total"] .".";
        
        echo "first name is " . $_SESSION["name"] .".";
        ?>
    </body>
    </html>