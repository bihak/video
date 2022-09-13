<?php 
      include 'nav.php';    
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
        $select1 = $donnees[0][1];
        $select2 = $donnees[1][1];
        $select3 = $donnees[2][1];
        $select4 = $donnees[3][1];
        $select5 = $donnees[4][1];
        $select6 = $donnees[5][1];
        
        $answer1 = $cnx->query("SELECT * FROM `film`\n" . "ORDER BY `film`.`CODE_TYPE_FILM` ASC;");
        $donnees1 = $answer1->fetchAll();
        
        $i=0;
        while ($donnees1[$i][1] == "ACT" ) {
            
                $act = array(
                    $i => $donnees1[$i][3],
                );
                
                $i++;
            }
        $i=11;
        while ($donnees1[$i][1] == "ANI" ) {
            $j = 0;
                $ani = array(
                    $j => $donnees1[$i][3],
                );
                
                $i++;
                $j++;
            }       
        $i=20;   
        while ($donnees1[$i][1] == "COM" ) {
            $j = 0;
                $com = array(
                    $j => $donnees1[$i][3],
                );
                
                $i++;
                $j++;
            }
        $i=28;
        while ($i < 37 ) {
            $j = 0;
                $hor = array(
                    $j => $donnees1[$i][3],
                );
                
                $i++;
                $j++;
            } 
        
        
        
    }
?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
        <div class="row mt-3  ">
                <div class="col-2 ">
                <?php 
                    include 'menu.php';    
                ?>  
                </div>
                <div class="col-9 pt-4 text-center">
                  <a href="#"><h1>selectionnez le type de film que vous rechercher</h1></a>

                  <form method="post" action="VCIResa2.php" enctype="multipart/form-data">
                    <table>
                        <tr>
                            <select name="select" id="" style="width: 300px;">
                                <option value="">< Sélectionnez le type recherché ></option>
                                <option value="select1" name="select1"><?= $select1 ?></option>
                                <option value="select2" name="select2"><?= $select2 ?></option>
                                <option value="select3" name="select3"><?= $select3 ?></option>
                                <option value="select4" name="select4"><?= $select4 ?></option>
                                <option value="select5" name="select5"><?= $select5 ?></option>
                                <option value="select6" name="select6"><?= $select6 ?></option>
                            </select>  
                        </tr>
                        <tr>
                             <td><input name="btn_telecharger" type="submit" value="Télécharger"></td>
                        </tr>
                    </table>
                  </form>
                </div> 
            </div> 
        </div>
               
</body>
</html>