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

?>