<? 
require_once '../classes/Pokemon.php';
require_once '../functions.php';

$pokemons = Pokemon::get_pokemons($apiUrl, $apiParams);
?>
        
        <?php 
        foreach ($pokemons as $key => $pokemon) :?>
        <article class="pokemon">
            <header class="pokemon__title"><?= ($key+1) .") " . $pokemon->name ?> </header>
            <p class="pokemon__text"> Descripcion de <?= $pokemon->name ?></p>
            <div class="pokemon__image__wrapper">
            <img class="pokemon__image" src= <?="$pokemon->imageUrl"?> />
            </div>
            <ul class="pokemon__characteristics__list">
                <li><?= $pokemon->print_height() ?></li>
                <li><?= $pokemon->print_weight() ?></li>
                <?php foreach ($pokemon->print_abilities() as $key => $ability) :?>
                    <li><?= $ability ?> </li>
                <?php endforeach; ?>

            </ul>
            <footer class="pokemon__footer"><a target="_blank" href="<?= $pokemon->url ?>">Más información ℹ️</a></footer>
        </article>
        <?php endforeach; ?>
        </div>
