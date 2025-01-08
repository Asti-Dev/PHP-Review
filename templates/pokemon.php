<? 
require_once '../classes/Pokemon.php';
require_once '../functions.php';

$data = $_POST['data'];

if ($_POST['data']["limit"] <= 20 && $_POST['data']["offset"] <= 1302) {
    $apiParams = [
        "limit" => (int) $data["limit"],
        "offset" => (int) $data["offset"],
    ];
    $pokemons = Pokemon::get_pokemons($apiUrl, $apiParams);
}
?>
        <? if(isset($pokemons)) :?>
        <? foreach ($pokemons as $key => $pokemon) :?>
        <article class="pokemon">
            <header class="pokemon__title"><?= ($key+1) .") " . $pokemon->name ?> </header>
            <p class="pokemon__text"> Descripcion de <?= $pokemon->name ?></p>
            <div class="pokemon__image__wrapper">
            <img class="pokemon__image" src= <?="$pokemon->imageUrl"?> />
            </div>
            <ul class="pokemon__characteristics__list">
                <li><?= $pokemon->print_height() ?></li>
                <li><?= $pokemon->print_weight() ?></li>
                <? foreach ($pokemon->print_abilities() as $key => $ability) :?>
                    <li><?= $ability ?> </li>
                <? endforeach; ?>

            </ul>
            <footer class="pokemon__footer"><a target="_blank" href="<?= $pokemon->url ?>">Más información ℹ️</a></footer>
        </article>
        <? endforeach; ?>
        <? endif; ?>
