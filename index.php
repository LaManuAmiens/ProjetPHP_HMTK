<?php 
   $fichier = 'source.xml';
   $xml = simplexml_load_file($fichier) or die("Error: Cannot create object");
   ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
             <?php                                              
                 if($_GET['id'] == '1.html'){?>                                        
        <title><?= $xml->page[1]->title ;?></title>               
                <?php      
                 }else if ($_GET['id'] == '2.html'){?>          
        <title><?= $xml->page[2]->title ;?></title>
               <?php 
                }else if ($_GET['id'] == '3.html'){?>
        <title><?= $xml->page[3]->title ;?></title>
                <?php
                }else{?>               
        <title><?= $xml->page[0]->title ;?></title>
            <?php
                }   
                ?> 
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/style.css">      
    </head>
    <body>
        <div class="topnav" id="myTopnav">
            <a class="nav-link" href="index.php?id=0.html"><?= $xml->page[0]->menu ;?></a>
            <a class="nav-link" href="index.php?id=1.html"><?= $xml->page[1]->menu ;?></a>
            <a class="nav-link" href="index.php?id=2.html"><?= $xml->page[2]->menu ;?></a>
            <a class="nav-link" href="index.php?id=3.html"><?= $xml->page[3]->menu ;?></a>
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    </body>
</html>
