<?php
echo '<h1>Zadanie 1</h1></br>'; 
echo '<h3>Hello World</h3> </br>';

echo '<h1>Zadanie 2</h1></br>';
$x =29;
$pi = 3.14;
$text = 'cwiczenia PHP';
echo $x . ' to liczba pierwsza </br>';
echo 'Liczba PI to: ' . $pi . '</br>' ;
echo $text . 'sa super</br>';

echo '<h1>Zadanie 3</h1></br>';
$a = 4;
$b = 8;
echo 'Suma: '. $a + $b . '</br>';
echo 'Odejmowanie:'. $a - $b . '</br>';
echo 'Dzielenia: ' . $a / $b . '</br>';
echo 'Mnozenia: ' . $a * $b . '</br>';
echo 'Reszta: ' . $a % $b . '</br>';
echo 'Potengowania: '. $a **2 . '</br>';

echo '<h1>Zadanie 4</h1></br>';
$zmiennax1 = 10;
$zmiennax2 = 12;
$temp = $zmiennax1;
$zmiennax1 = $zmiennax2;
$zmiennax2 = $temp;
echo 'x1 = '. $zmiennax1. '</br>';
echo 'x2 = '. $zmiennax2. '</br>';

echo '<h1>Zadanie 5</h1></br>';
$x = 20;
$y = 100;
$p = 2*($x + $y);
$s = $x * $y;
echo 'Obwod : ' . $p . '</br>'; 
echo 'Pole : ' . $s . '</br>';

echo '<h1>Zadanie 6</h1></br>';
$x = 12;
if ( $x > 10 && $x <20 ) {
    echo 'IN</br>';
} else {
    echo 'Out</br>';
}
echo '<h1>Zadanie 7</h1></br>';
$age = 35;
if ($age < 10 ) {
    echo '$age jest mniejsza niz 10 </br>';
} elseif ($age>=20 && $age <35){
    echo '$age jest wieksza lub rowna liczbie 20 </>';
} elseif ($age>=35) {
    echo '$age jest wieksza badz rowna 35 </br>';
}
?>