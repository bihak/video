<?php 
      include 'nav.php';    
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<link rel="stylesheet" href="ext/style2.css">
<body>
<div class="row col-12">
    <div class="col-2">
    <?php 
      include 'menu.php';    
    ?>  
    </div>
    <div class="info col-8 text-center">
    <h1>voici le film que vous avait selectionnez </h1>

    <?php
    $nom=$num=$var=" ";
    include 'conection-bdd.php';
    $file = $_GET['var1'];
    $answer = $cnx->query('SELECT * FROM `film` INNER JOIN star on ID_REALIS = id_star;');
    $donnees = $answer->fetchAll();
    
    for ($i=0; $i < count($donnees); $i++) { 
        if ($donnees[$i][0] == $file) {
            $info = $donnees[$i];
    }
    
    }
    
    if ($info[1] == 'ACT') {$aff= 'Action';}
    if ($info[1] == 'ANI') {$aff= 'Animation';}
    if ($info[1] == 'HOR') {$aff= 'Horreur';}
    if ($info[1] == 'COM') {$aff= 'Comedie';}
    if ($info[1] == 'POL') {$aff= 'Policier';}
    if ($info[1] == 'SCF') {$aff= 'ScienceFiction';}
    $affiche = $aff.'/'.$donnees[$file][5];
    ?>
    
        <div class="row box ">
            <div class="col-1 image">
                <img src="http://localhost/php/video_club/pictures/FilmMiniatures/<?=$affiche?>" alt="">
            </div>
            <div class="col-11">
                <div class="col-12"><P>Titre:    <?= $info[3]?></P></div>
                <div class="col-12"><P>Annee:    <?= $info[4]?></P></div>
                <div class="col-12"><P>Realisateur:    <?= $info[8].' '.$info[9]?></P></div>
            </div>
        </div>
        <div class="row">
        <h1>veuillez saisir vos identifiants</h1>
            <?php  
            echo '<div class="row col-12">';
            echo '<form class="" action="VCIResa4.php" method="get" >';
                      echo '<input name="nom" type="text">';
                      echo '<input name="num" type="text">';
                      echo '<input hidden name="id" value="'.$info[0].'" type="text">';
                      echo '<input hidden name="titre" value="'.$info[3].'" type="text">';
                      echo '<input type="submit" name="submit">';
                      echo '<input type="submit">'; 
                         
            echo '</form>';
            echo '</div>';  
            ?>
        
        
        </div>
    
    </div>

</div>
</body>
</html>