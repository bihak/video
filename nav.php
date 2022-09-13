<?php 
          $today = date("j F Y");  
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
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<body>

    
            <div class="row mt-3  ">

                <div class="col-2 ">
                  <a href="#"><img src="pictures\DesignVideoClub\VCLogo.gif" alt=""></a>
                </div>
                <div class="col-7 pt-4 text-center">
                  <a href="#" class="disabled font-weight-bold"><h1 class="">Vidéo-Club</h1></a>
                  <a href="#"><h6>...et si on se faisait une toile, à la maison?</h6></a>
                </div>
                <div class="col-3 pt-5 ">
                    <ul class = "list-unstyled">
                        <li><a href="#"><?= $today ?></a></li>
                        <li><a href="#">Admin</a></li>
                    </ul> 
                </div>
                  
            </div>
              
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>