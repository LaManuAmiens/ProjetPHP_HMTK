<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>ProjetPHP_HMKT</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
  <div class="container-fluid">
    <a class="nav-link" href="index.php?id=1.html">Acceuil</a>
    <a class="nav-link" href="index.php?id=2.html">Qui sommes-nous ?</a>    
    <a class="nav-link" href="index.php?id=3.html">Nos clients témoignent</a>
    <a class="nav-link" href="index.php?id=4.html">Contact</a>
    <?php
        $fichier = 'source.xml';
        $xml = simplexml_load_file($fichier) or die("Error: Cannot create object");
        
        switch ($_GET['id']) {
            case '1.html':
                echo $xml->page[0]->menu .
                $xml->page[0]->title .
                $xml->page[0]->content ;
                break;
            case '2.html':
                echo $xml->page[1]->menu .
                $xml->page[1]->title .
                $xml->page[1]->content ;
                break;
            case '3.html':
                echo $xml->page[2]->menu .
                $xml->page[2]->title .
                $xml->page[2]->content ;
                break;
            case '4.html':
                echo $xml->page[3]->menu .
                $xml->page[3]->title .
                $xml->page[3]->content ;
                break;
        }
    ?>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</body>
</html>
