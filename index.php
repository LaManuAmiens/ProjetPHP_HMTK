<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>ProjetPHP_HMKT</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/stylet.css">
</head>
<body>
  <div class="container-fluid">
<!-- ?php $fichier = 'source.xml';
$xml = simplexml_load_file($fichier);
foreach($xml as $page){
	echo $content->content.'<br>';
} ?> -->
<div class='jumbotron'>
<?php
$xml=simplexml_load_file("source.xml") or die("Error: Cannot create object");
echo $xml->page[1]->menu .  $xml->page[1]->title . $xml->page[1]->content;"<br>";
?>

  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</body>
</html>
