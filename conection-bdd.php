<?php 
            $servername = 'localhost';
            $username = 'root';
            $password = 'root';
            $bdd="video";
            try {
             $cnx = new PDO('mysql:host='.$servername.';dbname='.$bdd, $username, $password);
             $cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
             }
             catch (PDOException $error) {
             echo 'N° : '.$error->getCode().'<br />';
             die ('Erreur : '.$error->getMessage().'<br />');
             }    
 ?>   