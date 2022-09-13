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
    
    }var_dump($info);
    ?>
    
        <div class="row box ">
            <div class="col-1 image">
                <img src="http://localhost/php/video_club/pictures/FilmMiniatures/Action/<?= $donnees[$file][5]?>" alt="">
            </div>
            <div class="col-11">
                <div class="col-12"><P>Titre:    <?= $info[3]?></P></div>
                <div class="col-12"><P>Annee:    <?= $info[4]?></P></div>
                <div class="col-12"><P>Realisateur:    <?= $info[8].' '.$info[9]?></P></div>
            </div>
        </div>
        <div class="row">
        <h1>veuillez saisir vos identifiants</h1>
                <form action="<?=$var?>" method="post">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">NOM</label>
                        <input type="text" class="form-control" name="nom" id="exampleInputEmail1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">num</label>
                        <input type="text" class="form-control" name="num" id="exampleInputEmail1">
                    </div>
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </form>
                <form action="VCIAccueil.php" method="post">
                    <button type="submit"  class="btn btn-primary">anuller</button>
                </form>
            <?php
            if ( isset($_POST['submit'] )){
                $nom = $_POST['nom']; 
                $num = $_POST['num']; 
                  
            } 
            $answer1 = $cnx->query("SELECT * FROM `adherent`;");
            $donnees1 = $answer1->fetchAll();
            $bool=$bool1=0;
            $i=0;
            while ($i <= count($donnees1)-1) {
                $nomadh=$donnees1[$i][1].' '.$donnees1[$i][2];
                if ($nomadh == $nom && $num == $donnees1[$i][0]) {
                        $bool=1;
                }
                $i++;
            }
            $answer2 = $cnx->query("SELECT * FROM `location`;");
            $donnees2 = $answer2->fetchAll();
            var_dump($donnees1);
            var_dump($info);
            while ($i <= count($donnees2)) {
                if ($info[0] == $donnees2[$i][1]) {
                    $bool1=1;
                }
                $i++;
            }
            
            if ( isset( $_POST['submit'] ) ) {
             $today= date('Y-N-d');
            $answer3 = $cnx->query("SELECT * FROM `support`;");
            $donnees3 = $answer3->fetchAll();
            if ($bool1 == 0 && $bool == 1) {
                 $cnx->exec("INSERT INTO location (NUM_ADHERENT,ID_FILM,CODE_SUPPORT,DEBUT_LOCATION,DATE_RETOUR,TARIF_APPLIQUE) 
                 values ('$num','$info[0]','D','$today','$today','10')");
            }   
            }  
            var_dump($bool);
            var_dump($bool1);
            if ($bool1 == 0 && $bool == 1) {
                $var="VCIResa4.php";
            }else{
                $var="VCIResa5.php";
            }
var_dump($var);

            ?>
        <form action="">
            <input type="button" value="annuler">
        </form>
        
        </div>
    
    </div>

</div>
</body>
</html>