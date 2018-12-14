<?php 
   $fichier = 'source.xml';
   $xml = simplexml_load_file($fichier) or die("Error: Cannot create object");
   ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>ProjetPHP_HMKT</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/style.css">
    </head>
    <body>
        <div class="topnav" id="myTopnav">
            <a href="index.php?id=0.html"><?= $xml->page[0]->title ;?></a>
            <a href="index.php?id=1.html"><?= $xml->page[1]->title ;?></a>
            <a href="index.php?id=2.html"><?= $xml->page[2]->title ;?></a>
            <a class="nav-link" href="index.php?id=3.html"><?= $xml->page[3]->title ;?></a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
        <div class="container-fluid">
            <div class="jumbotron">
                <?php 
                                               
                 if($_GET['id'] == '1.html'){?>                                
                
                <p><?= $xml->page[1]->content ;?></p>
                
                <?php      
                 }else if ($_GET['id'] == '2.html'){?>
                
                <p><?= $xml->page[2]->content ;?></p>
               <?php 
                }else if ($_GET['id'] == '3.html'){?>
                
                <p><?= $xml->page[3]->content ;?></p>
                <?php
                }else{?>
                
                <p><?= $xml->page[0]->content ;?></p>
            <?php
                }   
                ?>
            </div>
        </div>
        <script>
            function myFunction() {
                var x = document.getElementById("myTopnav");
                if (x.className === "topnav") {
                    x.className += " responsive";
                } else {
                    x.className = "topnav";
                }
            }
        </script>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    </body>
</html>
