<?php

//Substituir todas as vogais por *
$string = "Manipulacao de Strings";
echo str_replace(["a","e","i","o","u"],"*", $string);

//Verificar se um número é primo
function isPrimo($num){
    for($i = 2; $i <$num; $i++){
        if($num % $i === 0){
            return false;
        }
    }
    return true;
}
echo("<br>");
$numero = 19;
if(isPrimo($numero)){
    echo "$numero é um número primo.";
} else {
    echo "$numero é um numero primo.";
}

//Inverter uma string sem usar a função strrev
$string = "socorram-me subi no ônibus em Marrocos";
$invertida = "";

for($i = strlen($string) - 1; $i >= 0; $i--){
    $invertida .= $string[$i];
}

echo "<br>";
echo $invertida;

//crie uma função que verifique se uma palavra é palíndromo

function isPalindromo($palavra){
    $palavraIvertida = strrev($palavra);
    return strtolower ($palavra) === strtolower($palavraIvertida);
}
echo "<br>";

$teste = "radar";
if(isPalindromo($teste)){
    echo "$teste é um palindromo";
}else {
    echo "$teste não é um palindromo";
}


$string = "Esta é uma string com vogais.";
$pattern = '/[aeiouáéíóúàèìòùãõäëïöü]/i';
$replacement = "*";
$newString = preg_replace($pattern, $replacement, $string);
echo $newString;

function checkSign($number) {
    if ($number >  0) {
        return "Positivo";
    } elseif ($number <  0) {
        return "Negativo";
    } else {
        return "Zero";
    }
}

$phrase = "Esta é uma frase com várias palavras.";
$words = explode(" ", $phrase);
$count = count($words);
foreach ($words as $word) {
    echo $word . "\n";
}

for ($i =  1; $i <=  20; $i++) {
    if ($i %  3 ==  0) {
        echo "?\n";
    } else {
        echo $i . "\n";
    }
}


function removeSpaces($string) {
    return str_replace(' ', '', $string);
}


$first =  0;
$second =  1;
echo $first . "\n"; // Imprime o primeiro termo
echo $second . "\n"; // Imprime o segundo termo
for ($i =  2; $i <  9; $i++) {
    $next = $first + $second;
    $first = $second;
    $second = $next;
    echo $next . "\n";
}

function isPangram($text) {
    $alphabet = range('a', 'z');
    foreach (str_split(strtolower($text)) as $letter) {
        if (in_array($letter, $alphabet)) {
            unset($alphabet[array_search($letter, $alphabet)]);
        }
    }
    return empty($alphabet);
}

?>