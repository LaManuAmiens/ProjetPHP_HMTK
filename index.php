
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>ProjetPHP_HMKT</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/style.css">
    </head>
    <body>
        <div class="container-fluid">
            <div class="jumbotron">
                <a class="nav-link" href="index.php?id=0.html">Acceuil</a>
                 <a class="nav-link" href="index.php?id=1.html">Qui sommes-nous ?</a>               
                <?php 
                $fichier = 'source.xml';
                $xml = simplexml_load_file($fichier) or die("Error: Cannot create object");

                 if($_GET['id'] == '0.html'){
                        echo $xml->page[0]->menu .
                            $xml->page[0]->title .
                            $xml->page[0]->content ;
                 }
                else{
                  echo 'error';
                }
                ?>
             </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    </body>
</html>
