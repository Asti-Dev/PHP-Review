<?php

declare(strict_types=1);

class Pokemon {

    function __construct( 
        public string $name ,
        public string $imageUrl ,
        public string $url ,
        public int $height ,
        public int $weight ,
        public $abilities = []
    )
    {}

    public function print_height() : string{
        return "Altura : $this->height";
    }

    public function print_weight() : string{
        return "Peso : $this->weight";
    }

    public function print_abilities() : array{

        $print_text = [];

        foreach($this->abilities as $key => $abilitie){
            $print_text[] = "Habilidad " . ($key+1) . " : " . $abilitie->ability->name;
        }
    
        return $print_text;
    }

    public static function get_pokemons(string $url, ?array $params = NULL) : array
{
    $pokemons = [];
    $data = new stdClass();
    $data = get_data($url, $params);

    foreach ($data->results as $key => $pokemon){
        $pokeData = new stdClass();
        $pokeData = get_data(($pokemon->url));
        $pokemons[] = new Pokemon(
            $pokeData->name,
            "https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/" .$pokeData->id. ".png",
            $pokemon->url,
            $pokeData->height,
            $pokeData->weight,
            $pokeData->abilities);
    }
    
    return $pokemons;

}
}