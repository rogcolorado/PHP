<?php
print("<h1>Funções para Arrays</h1>");

$index = [
    "AC/DC",
    "Nirvana",
    "Alter Bridge",
];

$associativo = [
    "band_1" => "AC/DC",
    "band_2" => "Nirvana",
    "band_3" => "Alter Bridge",
];

array_unshift($index, "Queen");
$associativo = [
"band_4" => "Pearl Jam",
] + $associativo;

array_push($index, " ");
$associativo = $associativo + [
    "band_6" => "",
];

echo "<pre>",print_r($index, TRUE),"</pre>";

echo "<pre>",print_r($associativo, TRUE),"</pre>";

array_shift($index);//remove o primeiro
array_shift($associativo);//remove o primeiro

array_pop($index);//remove o último
array_pop($associativo);

print("<h3>Atualizado</h3>");

echo "<pre>",print_r($index, TRUE),"</pre>";

echo "<pre>",print_r($associativo, TRUE),"</pre>";
?>