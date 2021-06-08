<?php

$animal = <<<FRASE
"con esfuerzo y dedicacion prodras\n alcanzar tus metas"
'Hola'
FRASE;

echo $animal;

echo substr('María Mendez',8);
$myString='Bienvenido al mundo de la programacion';
$findme='programacion';
echo strpos($myString,$findme,12);

$search=' ';
$replace=':';
$text='91 75 1A EC 9A C7';
str_replace($search,$replace,$text,$count);
echo $count;


$arg1=1994;
$arg2='PHP';
$text='En %d fue creado %s';

echo sprintf($text,$arg1,$arg2);

$text='Mundo en 123 hola';
$regex='/hola$/i';
echo preg_match($regex,$text);


$text='Yo vivo en México y Méjico';
$regex='/Mé(x|j)ico/';
echo preg_match($regex,$text);
?>