<?php
date_default_timezone_set('America/Sao_Paulo');

echo "<h1>DATE TIME</h1>";
define("DATE_BR","d/m/Y H:i:s");

$datenow = new DateTime();
$dateBirth = new DateTime("1980-07-06");
$dateStatic =   DateTime::createFromFormat(DATE_BR,"16/07/1995 12:00:00");

var_dump(
    $datenow,"<br>",
    get_class_methods($datenow),"<br>",
    $dateBirth,"<br>",    
    $dateStatic 

);

var_dump(
    $datenow->format(DATE_BR),
    $datenow->format("d")
);

echo "<p>Hojé é dia {$datenow->format('d')} do {$datenow->format('m')} de {$datenow->format('Y')}</p> ";

$newDateTimeZone = new DateTimeZone("Pacific/Apia"); 
$newDateTime = new DateTime('now', $newDateTimeZone);

var_dump(
    $newDateTimeZone,
    $newDateTime,
    $datenow
);

echo "<h1>DATE INTERVAL</h1>";

$dateInterval = new DateInterval("P10Y2MT10M");
Var_dump(
    $dateInterval

);
$dateTime = new DateTime('now');
$dateTime->add($dateInterval);
var_dump($dateTime)
?>