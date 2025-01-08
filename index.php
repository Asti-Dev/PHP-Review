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
        <form>
        <div class="grid">
          <label for="limit">
            Cantidad de Pokemons
            <input type="number" id="limit" name="limit" placeholder="max: 20" required>
          </label>
          <label for="offset">
            Orden de lista
            <input type="number" id="offset" name="offset" placeholder="max: 1302" required>
          </label>
          <button type="button" id="searchPokemons" class="pokemon__button">Submit</button>
        </div>
        </form>
        <div class="pokemons__wrapper">
            
        </div>
    </section>
    <section id="Section2" class="container">
        
    </section>
    <section id="Section3" class="container contact">
        
    </section>
    <footer class="container" >
        Copyright © 2024 - Spectre
    </footer>
    <script src="./js/index.js"></script>
</body>
</html>