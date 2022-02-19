<?php
print_r("<h1>Variaveis</h1>");

$userFirstName = "Rogério";
$userLastName = "Moraes";
$userAge = 42;

Print_r("<h3>{$userFirstName} {$userLastName} tem {$userAge} anos de idade.</h3>");

print_r("<h1>Variavel variavel</h1>");
$company = "Inovadora";
$$company = "Sistemas";

print_r("<h4>{$company} {$Inovadora}</h4>");

$a = 10;
$b = 20;

$a = &$b;
$b = 50;

var_dump([
    "a" => $a,
    "b" => $b
]);

print_r("<h2>Boolean</h2>");

$true = true;
$false = false;

var_dump($true, $false);
$bestAge = ($userAge > 50);
var_dump($bestAge);

print_r("<h2>callback</h2>");
$code = "<article><h1>Um call User Function!</h1></article>";
$codeClear = call_user_func("strip_tags",$code);
var_dump($code, $codeClear);

$codeMore = function ($code){
    var_dump($code);
};
$codeMore("<p>#Bora Programar!</p>");

print_r("<h2>Outros tipos</h2>");
$string = "Olá Mundo!";
$array = [$string];
$object = new stdClass();
$object->hello = $string;
$null = null;
$int = 1;
$float = 1.34;

var_dump([
$string,"<br>",
$array,"<br>",
$object,"<br>",
$null,"<br>",
$int,"<br>",
$float,"<br>",
]);
?>