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
    <main id="Section1" class="container">
        <h3> Lista de Pokemons</h3>
        <div class="pokemons__wrapper">
        <?php foreach ($data["results"] as $key => $pokemon) :?>
        <article class="pokemon">
        <?php 
                $pokeData = get_data(($pokemon["url"]));
        ?>
            <header class="pokemon__title"><?= ($key+1) .") " . $pokeData["name"] ?> </header>
            <p class="pokemon__text"> Descripcion de <?= $pokeData["name"]?></p>
            <div class="pokemon__image__wrapper">
            <img class="pokemon__image" src= <?="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/" .$pokeData["id"]. ".png"?> />
            </div>
            <ul class="pokemon__characteristics__list">
                <li>Altura: <?= $pokeData["height"]?></li>
                <li>Peso: <?= $pokeData["weight"]?></li>
                <?php foreach ($pokeData["abilities"] as $key => $ability) :?>
                    <li> Abilidad <?= ($key+1) .": ". $ability["ability"]["name"]?> </li>
                <?php endforeach; ?>

            </ul>
            <footer class="pokemon__footer"><a target="_blank" href="<?= $pokemon["url"] ?>">Más información ℹ️</a></footer>
        </article>
        <?php endforeach; ?>
        </div>
    </main>
    <section id="Section2" class="container">
        <h3> Categorias de nuestros productos </h3>
        <div class="grid">
            <article class="category-item">
                <div class="category__image__wrapper">
                <img class="category__image" src="./img/calzado.jpg" alt="">
                </div>
                <footer>
                    <a href="#"> ➡ Categoria 1</a>
                </footer>
            </article>
            <article class="category-item">
            <div class="category__image__wrapper">    
            <img class="category__image" src="./img/hogar.jpg" alt="">
                </div>    
            <footer>
                    <a href="#"> ➡ Categoria 2</a>
                </footer>
            </article>
        </div>
        <div class="grid">
            <article class="category-item">
            <div class="category__image__wrapper">    
            <img class="category__image" src="./img/ropa.jpg" alt="">
                </div>    
            <footer>
                    <a href="#"> ➡ Categoria 3</a>
                </footer>
            </article>
            <article class="category-item">
            <div class="category__image__wrapper">    
            <img class="category__image" src="./img/tecnologia.jpg" alt="">
                </div>    
            <footer>
                    <a href="#"> ➡ Categoria 4</a>
                </footer>
            </article>
        </div>
    </section>
    <section id="Section3" class="container contact">
        <div>
        <h3>Ubicanos</h3>
        <p>
            Nos encontramso cerca del wong de benavides.
            Entre la avenida benavides y republica de panama.
        </p>
        <ul>
            <li>Direccion: <a href="https://maps.app.goo.gl/EGdtUdBxVm9cDss68">Av. Alfredo Benavides 1475, Miraflores</a></li>
            <li>Numero de contacto: <a href="tel:920530712">920530712</a></li>
            <li>Whatsapp: <a href="https://wa.me/51920530712?text=Hola">920530712</a></li>
        </ul>
        </div>
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3900.7985133229504!2d-77.02034592405866!3d-12.125934188117075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c803b8fdfeb3%3A0x79c04d09ad29de06!2sWong%20Benavides!5e0!3m2!1sen!2sco!4v1699658688604!5m2!1sen!2sco" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
    <footer class="container" >
        Copyright © 2024 - Spectre
    </footer>
</body>
</html>