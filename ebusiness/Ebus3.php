<?php
//start session
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title> Receipt</title>
     </head>
    <body>
        <h4>Receipt</h4>
        
        <?php
        //echo session variables that were set on previous page 
        echo "total is " . $_SESSION["total"] .".";
        ?>
    </body>
    </html>