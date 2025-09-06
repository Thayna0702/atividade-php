<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade01</title>
</head>
<body>

    <?php
echo"ola! bem vindo ao PHP."; //1.1
?>

<?php
$nome = "thayna";
echo "Olá, $nome! Bem vindo(a)." //1.2
?>

<h1>ola x! bem vindo ao PHP 1</h1>
<h2>ola x! bem vindo ao PHP 2</h2>
<h3>ola x! bem vindo ao PHP 3</h3>
<h4>ola x! bem vindo ao PHP 4</h4>
<h5>ola x! bem vindo ao PHP 5</h5>
<h6>ola x! bem vindo ao PHP 6</h6>

<p>ola x! bem vindo ao PHP p</p>

<!-- 1.3 -->

<?php
//2.1
$nome = "jhenifer";
$idade = 23;
$altura = 1.67;

echo $nome;
echo "<br>";
echo $idade;
echo "<br>";
echo $altura;
echo "<br>";
?>

<?php
//2.2
const PI = 3.14159;

echo "<br>";
echo PI;
?>

<?php
//2.3.1
$num1 = 1;
$num2 = 2;

$soma = $num1 + $num2;

echo "<br>";
echo $soma;
?>

<?php
//2.3.2
$num1 = 1;
$num2 = 2;

$subtração = $num1 - $num2;

echo "<br>";
echo $subtração;
?>

<?php
//2.3.3
$num1 = 1;
$num2 = 2;

$multiplicação = $num1 * $num2;

echo "<br>";
echo $multiplicação;
?>

<?php
//2.3.4
$num1 = 1;
$num2 = 2;

$divisão = $num1 / $num2;

echo "<br>";
echo $divisão;
?>

<?php
//2.3.5
$num1 = 1;
$num2 = 2;

$restodedivisão = $num1 % $num2;

echo "<br>";
echo $restodedivisão;
echo "<br>"
?>

<?php
//2.4
$a = 5;
$b = 10;

echo "a == b";
var_dump($a==$b);

echo "<br>";

echo "a != b";
var_dump($a!=$b);

echo "<br>";

echo "a > b";
var_dump($a>$b);

echo "<br>";

echo "a < b";
var_dump($a<$b);

echo "<br>";

echo "a >= b";
var_dump($a>=$b);

echo "<br>";

echo "a <= b";
var_dump($a<=$b);

echo "<br>";
?>

<?php
//2.5
$a = 20;
$b = 21;

$a = true;
$b = false;


echo "<br>";

echo "a && b";
var_dump ($a && $b);

echo "<br>";

echo "a || b";
var_dump ($a || $b);

echo "<br>";

echo "a !a b";
var_dump (!$a);

echo "<br>";

echo "a !b b";
var_dump (!$b);

echo "<br>";
?>

<?php
echo "não sei fazer o desafio"

//meme do burro do shurek que vai terminar isso com o olho piscando.
?>
</body>
</html>