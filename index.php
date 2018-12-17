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
        <div id="main">
            <div id="header">
                <div id="logo">
                    <div id="logo_text">
                        <div class="button_container" id="toggle">
                            <span class="top"></span>
                            <span class="middle"></span>
                            <span class="bottom"></span>
                        </div>
                        
                        <div class="overlay" id="overlay">
                            <nav class="overlay-menu">
                                <ul>
                                    <li><a href="1.html"><?= $xml->page[0]->menu ;?></a></li>
                                    <li><a href="2.html"><?= $xml->page[1]->menu ;?></a></li>
                                    <li><a href="3.html"><?= $xml->page[2]->menu ;?></a></li>
                                    <li><a href="4.html"><?= $xml->page[3]->menu ;?></a></li>
                                </ul>
                            </nav>
                        </div> 
                        <!-- class="logo_colour", allows you to change the colour of the text -->
                        <h1><a href="index.html">Maçonnerie<span class="logo_colour">Ocordo</span></a></h1>
                    </div>
                </div>
                <div id="menubar">
                    <ul id="menu">
                        <li><a href="1.html"><?= $xml->page[0]->menu ;?></a></li>
                        <li><a href="2.html"><?= $xml->page[1]->menu ;?></a></li>
                        <li><a href="3.html"><?= $xml->page[2]->menu ;?></a></li>
                        <li><a href="4.html"><?= $xml->page[3]->menu ;?></a></li>
                    </ul>
                </div>
            </div>
            <div id="site_content">
                <div class="sidebar">
                    <div class="container-fluid">
                        <?php                                               
                         if($_GET['id'] == '1.html'){?>                                        
                        <div><?= $xml->page[0]->content ;?></div>               
                        <?php      
                         }else if ($_GET['id'] == '2.html'){?>         
                        <div class="jumbotron"><?= $xml->page[1]->content ;?></div>
                       <?php 
                        }else if ($_GET['id'] == '3.html'){?>
                        <div><?= $xml->page[2]->content ;?></div>
                        <?php
                        }else{?>               
                        <div><?= $xml->page[3]->content ;?></div> 
                    <?php
                        }   
                        ?>
                    </div>
                </div>               
            </div>   
            <div id="footer">
                <span style="display:block;font-size:0.9em;line-height:55px;">
                    <span style="display:inline-block;">&copy; <span style="font-family:'Titillium Web';font-weight:900;letter-spacing:0.06em">LA MANU</span> Design 2018</span></span>
                <span style="display:block;font-size:0.7em;line-height:30px;margin-top:-25px">&lang; &copy; 2018-<?php echo date('Y');?> &rang;<span>
                </div> 
            </div>        
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src='http://cdnjs.cloudflare.com/ajax/libs/wow/0.1.12/wow.min.js'></script>
        <script  src="index.js"></script>
    </body>
</html>
