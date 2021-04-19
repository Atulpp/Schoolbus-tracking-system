<?php

session_start();

$_SESSION['id'] = $_POST['id'];
$_SESSION['pswd'] = $_POST['pswd'];
?>

<!DOCTYPE html>
        <html lang="en">
        <head>
       
     <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="progressstyle.css" />
        </head>

        <body>

      

<div class="namedisplay">Loading Faculty Account<br>Id=<?php echo $_SESSION['id']; ?></div>
       <div class="progress-bar">
       <div class="progresss" id="progresss"></div>
         <div id="percentCount" class="percent-count">100% test</div>
        		
        		
        	
        </div>

        <script src="script1.js"></script>



        </body>
        </html>