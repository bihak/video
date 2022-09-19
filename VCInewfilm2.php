<?php 
      include 'nav2.php';  
      include 'conection-bdd.php';       
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
    ?> 
     
    </div>
    <div class="info col-8 ">
    
        <?php 
        $newfilm = $_POST;
      
    ?> 
        
    </div>
    <?php
     $cnx->exec("INSERT INTO film (,CODE_TYPE_FILM,ID_REALIS,TITRE_FILM,ANNEE_FILM,REF_IMAGE,RESUM) 
     values ('$newfilm[select_type]','$newfilm[select_realisateur]','$newfilm[titre]','$newfilm[annee]','$newfilm[aff]','$newfilm[rsum]')");
    ?>
</div>
</body>
</html>