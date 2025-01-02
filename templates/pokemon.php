
<section id="Section1" class="container">
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
</section>