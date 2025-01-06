<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/pico/pico.min.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <title>Spectre</title>
</head>
<body>
    <div class="top">
    <div id="progress"></div>
    <nav class="container-fluid navbar">
        <ul>
          <li><strong>My Page</strong></li>
        </ul>
        <ul>
          <li><a href="#Section1">Seccion 1</a></li>
          <li><a href="#Section2">Seccion 2</a></li>
          <li><a href="#Section3" role="button">Seccion 3</a></li>
        </ul>
    </nav>
    </div>
    <header class="container-fluid header">
        <h1 class='text-center'> Encuentra las mejore cosas aqui en <br><span>Spectre</span></h1>
        <h2 class="text-center"> No pierdas tiempo en tiendas intermediarias</h2>
    </header>
    <section id="Section1" class="container">
        <h3> Lista de Pokemons</h3>
        <div class="pokemons__wrapper">
            <div id="loader" aria-busy="true" style="display: none;"></div>
        </div>
    </section>
    <section id="Section2" class="container">
        <h3> Categorias de nuestros productos </h3>
        <div id="loader2" aria-busy="true" style="display: none;"></div>
    </section>
    <section id="Section3" class="container contact">
        <h3> Ubicanos </h3>
        <div id="loader3" aria-busy="true" style="display: none;"></div>
    </section>
    <footer class="container" >
        Copyright © 2024 - Spectre
    </footer>
    <script>
             $.ajax({
                url: "./templates/products_categories.php",
                type: "GET",
                beforeSend: function(){
                    $("#loader2").show();
                },
                success: function(response){
                    $("#Section2").empty();
                    $("#Section2").append(response);
                },
                complete: function(data){
                    $("#loader2").hide();
                }
            })
            $.ajax({
                url: "./templates/contact.php",
                type: "GET",
                beforeSend: function(){
                    $("#loader3").show();
                },
                success: function(response){
                    $("#Section3").empty();
                    $("#Section3").append(response);
                },
                complete: function(data){
                    $("#loader3").hide();
                }
            })
            $.ajax({
                url: "./templates/pokemon.php",
                type: "GET",
                beforeSend: function(){
                    $("#loader").show();
                },
                success: function(response){
                    $(".pokemons__wrapper").empty();
                    $(".pokemons__wrapper").append(response);
                },
                complete: function(data){
                    $("#loader").hide();
                }
            })
            
    </script>
</body>
</html>