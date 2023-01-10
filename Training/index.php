<?php
$tab = [20, 17, 22, 20, 16, 31, 22, 15, 13, -12, 16, 7, 1, 0, -7, -10];
//Wersja 1
//$iloscElementow = count($tab);
//$sum = array_sum($tab);
//$srednia = $sum/$iloscElementow;
//echo "ilosc elementow w tablice: ". $iloscElementow.'</br>';
//echo "Summa wartosci w tablice: ". $sum.'<br>';
//echo "Srednia temperatura: ".$srednia;

//Wersja 2
$sum = 0;
$ilosc = 0;
//mozan $ilosc= count($tab)
foreach ($tab as $t){
    $sum = $sum + $t;
    $ilosc = $ilosc +1;
}
$avg = $sum / $ilosc;
echo round($avg, 0) .'</br>';



//Tablice asocjacyjne
$tabAsoc = [
    'Adam' => 24,
    'Anna' => 30,
    'Tomasz' => 50,
    'Michal' =>20,
];

echo $tabAsoc['Tomasz'] . '</br>';

$sum =0;
foreach ($tabAsoc as $key => $value) {
    echo $key . '-'. $value . '</br>';
    $sum = $sum + $value;
}
echo $sum . '</br>';


$data = 
[
    "Włochy" => "Rzym",
    "Belgia" => "Bruksela",
    "Dania" => "Kopenhaga",
    "Finlandia" => "Helsinki",
    "Francja" => "Paryż",
    "Niemcy" => "Berlin",
    "rosja" => "skurwysyny",
    "Polska" => "Warszawa"
];

foreach ($data as $key=> $value) {
    echo 'Kraj: '. $key . ' ,Stolica: '. $value . '</br>';
}

$data1 = [
    "Europa" => [
            "0" => "Norwegia",
            "1" => "Niemcy",
            "2" => "Czechy",
            "3" => "Francja",
            "4" => "Słowenia",
            "5" => "Włochy",
        ],
    "Azja" => [
            "0" => "Chiny",
            "1" => "Indie",
            "2" => "Japonia",
        ],
    "Afryka" => [
            "0" => "RPA",
            "1"  => "Etiopia",
            "2" => "Egipt",
            "3" => "Ghana",
        ],
    "Ameryka" => [
            "0" => "USA",
            "1"  => "Kanada",
            "2" => "Argentyna",
            "3" => "Brazylia",
            "4" => "Chile",
    ]
];
$il=0;
foreach ($data1 as $key => $value ) {
    echo "Continent".$key." -" .count($value).'</br>';
    foreach($value as $number => $name){
        echo ($number+1) . $name. '</br>';
    }  
}


?>