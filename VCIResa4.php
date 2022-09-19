<?php 
      include 'nav.php';    
       
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <style>
        h1, p {color: blue;}
    </style>
<div class="row  ">
            <div class="col-2 image">
            <?php include 'menu.php'; ?> 
                
            </div>
            <div class="col-10 text-center">
                <h1>Reservation du film</h1>
            <?php 

            include 'conection-bdd.php';
            
            $nom = $_GET['nom'];
            $num = $_GET['num'];
            $id_film = $_GET['id'];
            $titre = $_GET['titre'];
            
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
            $i=0;
            while ($bool == 1 && $i < count($donnees2)) {
                if ($id_film == $donnees2[$i][1]) {
                    $bool1=1;
                    
                }
                $i++;   
            }
            if ($bool == 0) {
                echo '<P>Attention : les coordonneés client saisies sont erronées</P>';
                echo '<form action="VCIResa2.php">';
                echo '<input value="retour" type="submit">';
                echo '</form>';
            }
            if ($bool1 == 1) {
                echo '<P>Attention : il y a déja une reservation du film '.$titre.'';
                echo '<form action="VCIResa2.php">';
                echo '<input value="retour" type="submit">';
                echo '</form>';
            }
            
            if ( $bool1 == 0 && $bool == 1 )  {
                echo '<P>Merci '.$nomadh.' pour votre réservation</P>';
                echo '<br>';
                echo '<P>il ne vous reste plus qu\'a passer en boutique pour retire votre exemplaire du film</P>' .$titre.'';
                echo '<br>';
                echo '<form action="VCIAccueil.php">';
                echo '<input value="retour au menu" type="submit">';
                echo '</form>'; 
             $today= date('Y-N-d');
            $answer3 = $cnx->query("SELECT * FROM `support`;");
            $donnees3 = $answer3->fetchAll();
                 $cnx->exec("INSERT INTO location (NUM_ADHERENT,ID_FILM,CODE_SUPPORT,DEBUT_LOCATION,DATE_RETOUR,TARIF_APPLIQUE) 
                 values ('$num','$id_film','D','$today','$today','10')");
                 
            }  
            
            
            ?> 
            
               
            </div>
        </div>
        
</body>
</html>