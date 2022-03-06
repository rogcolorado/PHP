<?php
print "<h1>Manipulação de Objetos</h1>";

$arrProfile = [
    "name" => "Rogério",
    "company" => "Inovadora",
    "mail" => "teste@teste",
];

$objProfile = (object)$arrProfile;
/*echo "<pre>",print_r($arrProfile, TRUE),"</pre>";
echo "<pre>",print_r($objProfile, TRUE),"</pre>";*/
echo "<p>{$arrProfile['name']} trabalha na {$arrProfile['company']}</p>";
echo "<p>{$objProfile->name} trabalha na {$objProfile->company}</p>";

$ceo = $objProfile;
unset($ceo->company);
echo "<pre>",print_r($ceo, TRUE),"</pre>";

$company = new stdClass();
$company->company = "Inovadora";
$company->ceo = $ceo;
$company->manager = new stdClass();
$company->manager->name = "Miguel";
$company->manager->mail = "mail@teste";

echo "<pre>",print_r($company, TRUE),"</pre>";

$date = new DateTime();
var_dump([
    "<p>class" => get_class($company),"</p>",
    "<p>methods" => get_class_methods($date),"</p>",
    "<p>vars" => get_object_vars($date),"</p>",
    "<p>parents" => get_parent_class($date),"</p>",
    "<p>subclass" => is_subclass_of($date, "DateTime"),"</p>",

]);

$exception = new PDOException();
var_dump([
"<p>class" => get_class($exception),"</p>",
"<p>methods" => get_class_methods($exception),"</p>",
"<p>vars" => get_object_vars($exception),"</p>",
"<p>parents" => get_parent_class($exception),"</p>",
"<p>subclass" => is_subclass_of($exception, "Exception"),"</p>",
]);
?>