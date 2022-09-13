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
<link rel="stylesheet" href="ext/style1.css">
<body>
<div class="row col-12">
    <div class="col-2">
    <?php 
      include 'menu.php';    
    ?>  
    </div>
    <div class="info col-8 text-center">
        <h1>Liste de film de type Action </h1>
        <h2>Selectionnez le film que vous désirez reserver</h2>
        <?php 
           include 'conection-bdd.php';
           $file = $_POST['select'];
           $answer = $cnx->query('SELECT * FROM `film` INNER JOIN star on ID_REALIS = id_star;');
           $donnees = $answer->fetchAll();
           
           
           $k=$h=$l=$m=$n=$z=0;
           for ($i=0; $i < count($donnees); $i++) { 
                if ($donnees[$i][1] == "ACT") {
                    $k++;
                }
                if ($donnees[$i][1] == "HOR") {
                    $h++;
                }
                if ($donnees[$i][1] == "ANI") {
                    $l++;
                }
                if ($donnees[$i][1] == "COM") {
                    $m++;
                }
                if ($donnees[$i][1] == "POL") {
                    $n++;
                }
                if ($donnees[$i][1] == "SCF") {
                    $z++;
                }
           }
           echo '<div class="row col-12">';

                echo '<table class="titi">';
                   
                        echo '<tr class="toto">';
                        
                            echo '<td class="tata col-3">';
                            echo "Titre du film";
                            echo '</td>';
                            echo '<td class="tata col-3">';
                            echo "Son annee";
                            echo '</td>';
                            echo '<td class="tata col-">';
                            echo "Realisateur";
                            echo '</td>';
                            echo '<td class="tata col-3">';
                            echo "Affiche";
                            echo '</td>';
                        
                        echo '</tr>';
                    
                echo '</table>';
                echo '</div>';
           if ($file == "select1") {
            echo '<div class="row col-12">';
                echo '<table class="titi">';
                    for ($i=0; $i<=$k-1; $i++) {
                        $p=$donnees[$i][5];
                        
                        echo '<tr class="toto">';
                        
                            echo '<td class="tata col-3">';
                            echo '<a href="VCIResa3.php?var1='.$donnees[$i][0].'" >'.$donnees[$i][3].'</a>';
                            echo '</td>';
                            echo '<td class="tata col-3">';
                            echo $donnees[$i][4];
                            echo '</td>';
                            echo '<td class="tata col-1">';
                            echo $donnees[$i][9];
                            echo '</td>';
                            echo '<td class="tata col-2">';
                            echo $donnees[$i][8];
                            echo '</td>';
                            echo '<td class="tata col-3">';
                            echo '<img src="http://localhost/php/video_club/pictures/FilmMiniatures/Action/'.$donnees[$i][5].'" style= " width: 25%;  height: 25%; " alt="">';
                            echo '</td>';
                        
                        echo '</tr>';
                    }
                echo '</table>';
                echo '</div>';
            
           }   
           if ($file == "select2") {
            $j=11;
            echo '<div class="row col-12">';
            echo '<table >';
                for ($i=1; $i<=$l; $i++) {
                    echo '<tr class="toto col-12">';
                    
                        echo '<td class="tata col-3">';
                        echo '<a href="VCIResa3.php?var1='.$donnees[$j][0].'" >'.$donnees[$j][3].'</a>';
                        echo '</td>';
                        echo '<td class="tata col-3">';
                        echo $donnees[$j][4];
                        echo '</td>';
                        echo '<td class="tata col-1">';
                        echo $donnees[$j][9];
                        echo '</td>';
                        echo '<td class="tata col-2">';
                        echo $donnees[$j][8];
                        echo '<td class="tata col-3">';
                        echo '<img src="http://localhost/php/video_club/pictures/FilmMiniatures/Animation/'.$donnees[$j][5].'" style= " width: 25%;  height: 25%; " alt="">';
                        echo '</td>';
                    echo '</tr>';
                    $j++;
                }
            echo '</table>';
            echo '</div>';
        
           }
           if ($file == "select3") {
            $j=20;
            echo '<div class="row col-12">';
            echo '<table classe="col-12">';
                for ($i=1; $i<=$m; $i++) {
                    echo '<tr classe="toto col-12">';
                    
                        echo '<td class="tata col-3">';
                        echo '<a href="VCIResa3.php?var1='.$donnees[$j][0].'" >'.$donnees[$j][3].'</a>';
                        echo '</td>';
                        echo '<td class="tata col-3">';
                        echo $donnees[$j][4];
                        echo '</td>';
                        echo '<td class="tata col-1">';
                        echo $donnees[$j][9];
                        echo '</td>';
                        echo '<td class="tata col-2">';
                        echo $donnees[$j][8];
                        echo '</td>';
                        echo '<td class="tata col-3">';
                        echo '<img src="http://localhost/php/video_club/pictures/FilmMiniatures/Comedie/'.$donnees[$j][5].'" style= " width: 25%;  height: 25%; " alt="">';
                        echo '</td>';
                    
                    echo '</tr>';
                    $j++;
                }
            echo '</table>';
            echo '</div>';
           }
           if ($file == "select4") {
            $j=28;
            echo '<div class="row col-12">';
            echo '<table class="col-12">';
                for ($i=1; $i<=$h; $i++) {
                    echo '<tr class="toto col-12">';
                    
                        echo '<td class="tata col-3">';
                        echo '<a href="VCIResa3.php?var1='.$donnees[$j][0].'" >'.$donnees[$j][3].'</a>';
                        echo '</td>';
                        echo '<td class="tata col-3">';
                        echo $donnees[$j][4];
                        echo '</td>';
                        echo '<td class="tata col-1">';
                        echo $donnees[$j][9];
                        echo '</td>';
                        echo '<td class="tata col-2">';
                        echo $donnees[$j][8];
                        echo '</td>';
                        echo '<td class="tata col-3">';
                        echo '<img src="http://localhost/php/video_club/pictures/FilmMiniatures/Horreur/'.$donnees[$j][5].'" style= " width: 25%;  height: 25%; " alt="">';
                        echo '</td>';
                    
                    echo '</tr>';
                    $j++;
                }
            echo '</table>';
            echo '</div>';
           }     
        ?>   
    </div>
    
    
</div>
</body>
</html>