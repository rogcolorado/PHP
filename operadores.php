<?php
echo "<h1>Atribuição</h1>";

$operatorA = 5;
$operators = [
    "a += 5" => ($operatorA +=5),//10
    "a -= 5" => ($operatorA -=5),//5
    "a *= 5" => ($operatorA *=5),
    "a /= 5" => ($operatorA /=5),
];

echo "<pre>",print_r($operators, TRUE),"</pre>";

$incrementA = 5;
$incrementB = 5;
$increment = [
 "pós-incremento" => $incrementA++,
 "res-incremento" => $incrementA,
 "pre-incremento" => ++$incrementA,
 "pós-decremento" => $incrementB--,
 "res-decremento" => $incrementB,
 "pre-decremento" => --$incrementB,
];
echo "<pre>",print_r($increment, TRUE),"</pre>";

echo "<h1>Comparação</h1>";
 $relatedA = 5;
 $relatedB = "5";
 $relatedC = 10;

 $related = [
  "A == B" => ($relatedA == $relatedB),
  "A === B" => ($relatedA === $relatedB),
  "A != B" => ($relatedA != $relatedB),
  "A !== B" => ($relatedA !== $relatedB),
  "A > C" => ($relatedA > $relatedC),
  "A < C" => ($relatedA < $relatedC),
  "A >= C" => ($relatedA >= $relatedC),
  "A <= C" => ($relatedA <= $relatedC),

 ];

 var_dump($related);

 echo "<h1>Lógicos</h1>";
 $logicA = true;
 $logicB = false;
 $logic = [
 "a && b" => ($logicA && $logicB),
 "a || b" => ($logicA || $logicB),
 "!a" => (!$logicA),
 "!b" => (!$logicB),
 ];

 var_dump($logic);

 echo "<h1>Aritméticos</h1>";
 print ("<p>a = 5</p>");
 print ("<p>b = 10</p>");
 $calcA = 5;
 $calcB = 10;
 
 $calc = [
 "a + b" => ($calcA + $calcB),
 "a - b" => ($calcA - $calcB),
 "a * b" => ($calcA * $calcB),
 "a / b" => ($calcA / $calcB),
 "a % b" => ($calcA % $calcB),
 ];
 var_dump($calc);

?>