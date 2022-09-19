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
      $i = 1;
      $file = "select$i";
      
   if ($file) {
        $servername = 'localhost';
        $username = 'root';
        $password = '';
        $bdd="video";
        include 'conection-bdd.php';
        $answer = $cnx->query("SELECT * FROM `typefilm`;");
        $donnees = $answer->fetchAll();
        $select='select';
        $sel='';
        $type = $code_type = array();
        for ($i=0; $i < count($donnees) ; $i++) { 
            
            $type[$i] = $donnees[$i][1];
        
            $code_type[$i] = $donnees[$i][0];
            
        }
   }
   
       
    ?> 
     
    </div>
    <div class="info col-8 ">
    <?php  
                $answer1 = $cnx->query("SELECT * FROM `star`;");
                $donnees1 = $answer1->fetchAll();
                $i=0;
                
                while ($i < count($donnees1)) {
                    $real=$donnees1[$i][1].' '.$donnees1[$i][2];
                    $new[$i]=$real;
                    $real2=$donnees1[$i][0];
                    $code_star[$i] = $real2;
                    
                    $i++;
                }
                
                 ?> 
        <form action="VCInewfilm2.php" method="post">
            <label for="id">Identifiant :</label>
            <input type="text" name="id" disabled >
            <br>
            <label for="titre">Titre</label>
            <input type="text" name="titre">
            <br>
            <label for="select">Type de film</label>
                <select name="select_type" id="" style="width: 300px;">
                                <option value="">< Sélectionnez le type recherché ></option>
                                <?php 
                
                                    for ($i=0; $i < count($code_type); $i++) { 
                                     echo '<option value="'.$code_type[$i].'" name="select'.$i.'">'.$type[$i].'</option>';
                                     }
                                ?> 
                                
                </select>
            <br>
            <label for="select_realisateur">Realisateur</label>
                <select name="select_realisateur" id="" style="width: 300px;">
                <option value="">< Sélectionnez le Réalisateur ></option>
                <?php 
                
                    for ($i=0; $i < count($new); $i++) { 
                        echo '<option value="'.$code_star[$i].'" name="select'.$i.'">'.$new[$i].'</option>';
                    }
                ?>     
                </select>
            <br>
            <label for="annee">Année de sortie</label>
            <input type="text" name="annee">
            <br>
            <label for="aff">Affiche</label>
            <input type="file" name="aff">
            <br>
            <label for="rsum">Resumer</label>
            <input type="text" name="rsum">
            <input type="submit" value="submit">
        </form>
        
    </div>
   
</div>
</body>
</html>