        <?php 
          $today = date("j F Y");  
        ?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ext/nav.css">
    <title>Document</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<body>

    
            <div class="row mt-3  ">

                <div class="col-2 ">
                  <a href="#"><img src="pictures\DesignVideoClub\BackGroundPMAc.jpg" alt=""></a>
                </div>
                <div class="col-7 pt-4 text-center">
                  <a href="#" class="disabled font-weight-bold"><h1 class="">Vidéo-Club</h1></a>
                  <a href="#"><h6>...et si on se faisait une toile, à la maison?</h6></a>
                </div>
                <div class="col-3 pt-5 ">
                    <ul class = "list-unstyled ">
                        <li><a href="#"><?= $today ?></a></li>
                        <div class="myDIV" id="myDIV"><li><a  href="#">Admin</a></li></div>
                        <div class="hide" id="hide">
                          <form action="VCIResa5.php"  method="get">
                            <label for="login">Logine : </label>
                            <input type="text" name="login">
                            <br>
                            <label for="pass">Pass : </label>
                            <input class="pass" type="password" name="pass">
                            
                            <input class="submit"  type="submit" name="submit" value="submit">
                            
                            <input class="submit" id="retour"  type="submit" name="retour" value="retour">
                          </form>
                            
                        </div>
                    </ul> 
                </div>
                  
            </div>
            
<script src="script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>