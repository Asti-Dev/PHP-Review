<?php 
require_once 'functions.php';

$data = get_data($apiUrl, $apiParams);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/pico/pico.min.css">
    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>

    <title>Spectre</title>
</head>
<body>
    <nav class="container-fluid">
        <ul>
          <li><strong>My Page</strong></li>
        </ul>
        <ul>
          <li><a href="#Section1">Seccion 1</a></li>
          <li><a href="#Section2">Seccion 2</a></li>
          <li><a href="#Section3" role="button">Seccion 3</a></li>
        </ul>
    </nav>
    <header class="container-fluid header">
        <h1 class="text-center"> Encuentra las mejore cosas aqui en <br><span>Spectre</span></h1>
        <h2 class="text-center"> No pierdas tiempo en tiendas intermediarias</h2>
    </header>
    <?php render_template("pokemon", $data); ?>
    <?php render_template("products categories"); ?>
    <?php render_template("contact"); ?>
    <footer class="container" >
        Copyright © 2024 - Spectre
    </footer>
</body>
</html>