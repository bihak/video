<?php 
      include 'nav2.php';         
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="ext/VCIResa5.css">
    <title>Document</title>
</head>
<body>
<div class="row col-12">
    <div class="col-2">
    <?php 
      include 'menu2.php';    
      $admin = $_GET;
     
     if ($admin['login'] == 'admin' && $admin['pass'] == 'admin') {
            
     }   
    ?>  
    </div>
    <div class="info col-8 text-center">
    
        <h1>Bienvenu sur le site administrateur du Video-club</h1>
        
    </div>
    
</div>
</body>
</html>