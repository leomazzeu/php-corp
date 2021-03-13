<?php
require "app/application-class.php";

$app = new Application();
$operadores = $app->getListaOperadores();
?>
<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<title><?= $app->getAppName();?></title>
		<meta  http-equiv="Content-Type" content="text/html" charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/php-corp.css" rel="stylesheet">
	</head>
 <body>
	<div class="app-container">
	  <h1><?= $app->getAppName(); ?></h1>
	  <div>
      <h2>Lista de Operadores</h2>
      <?php
        foreach($operadores as $op) {
          echo "<p>" . $op->getNome() . "</p>\n";
        }
      ?>
	  </div>
	</div>
  </body>
</html>