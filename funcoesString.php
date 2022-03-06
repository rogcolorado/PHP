<?php
echo "<h1>Funções para String</h1>";

print ("<h2>String e multibite</h2>");
$string = "O último Show do AC/DC foi incrível!";
var_dump([
 "string" => $string,
 strlen($string),
 "mb_strlen" => mb_strlen($string),"<br>",
 "substr" => substr($string, "14"),"<br>",
 "mb_substr" => mb_substr($string, "9"),"<br>",
 "stroupper" => strtoupper($string),"<br>",
 "mb_stroupper" => mb_strtoupper($string),
]);

print ("<h2>Conversão de caixa</h2>");
$mbString = $string;
var_dump([
    "mb_stroupper" => mb_strtoupper($string),"<br>",
    "mb_strtolower" => mb_strtolower($string),"<br>",
    "mb_convert_case UPPER" => mb_convert_case($mbString,MB_CASE_UPPER),"<br>",
    "mb_convert_case LOWER" => mb_convert_case($mbString,MB_CASE_LOWER),"<br>",
    "mb_convert_case TITLE" => mb_convert_case($mbString,MB_CASE_TITLE),

]);

print ("<h2>Substituição</h2>");
$mbReplace = $mbString;
$mbReplace = $mbString."Fui, iria novamente, e foi épico!";
 var_dump([
     "mb_strlen" => mb_strlen($mbReplace),"<br>",
     "mb_strpos" => mb_strpos($mbReplace, ", "),"<br>",
     "mb_strrpos" => mb_strrpos("mbReplace", ", "),"<br>",
     "mb_substr" => mb_substr("mbReplace", "40 "),"<br>",
     "mb_strstr" => mb_strstr("mbReplace", ", "),"<br>",
     "mb_strrchr" => mb_strrchr("mbReplace", ", "),"<br>",

 ]);

 $mbReplace = $string;
 echo "<p>", $mbReplace, "</p>";
 echo "<p>", str_replace(["AC/DC","último"], "Nirvana", $mbReplace), "</p>";

 $article = <<<ROCK
 <article>
 <h3>event</h3>
 <p>desc</p>
 </article>
 ROCK;

 $articleData = [
     "event" => "Rock in Rio",
     "desc" => $mbReplace,
 ];

 echo str_replace(array_keys($articleData), array_values($articleData), $article);

 print ("<h2>Parse String</h2>");

 $endPoint = "name=Rogério&email=teste@teste.com.br";
 mb_parse_str($endPoint, $parseEndPoint);//função cria a váriavel parseEndPoint

 var_dump([
     $endPoint,"<br>",
     $parseEndPoint,
     (object)$parseEndPoint

 ]);

?>
