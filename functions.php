<?php 
declare(strict_types=1);

$apiUrl = "https://pokeapi.co/api/v2/pokemon";

$apiParams = [
    "limit" => 5,
    "offset" => rand(1, 100),
];

function get_data(string $url, ?array $params = NULL) : array
{
    if ($params) {
        $url = $url . "?" . http_build_query($params);
    }
    $curl = curl_init($url);
    
    curl_setopt ($curl, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    
    $response = curl_exec($curl);
    
    if (curl_errno($curl)) {
        echo "cURL error: " . curl_error($curl);
        $data = NULL;
    } else {
        $data = json_decode($response, true);
    }
    curl_close($curl);
    return $data;
};

function render_template(string $template, array $data = [] ){
    $template = trim($template);
    $template = str_replace(" ","_",$template);
    require("templates/$template.php");
}

?>