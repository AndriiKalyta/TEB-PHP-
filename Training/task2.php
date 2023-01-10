<?php 
$tab = [];
for ($i = 0; $i<200; $i++) {
    $tab[] =rand(50, 10000);
}
//echo '<pre>';
//var_dump($tab);
//echo '</pre>';
$max = $tab[0];
$min = $tab[0];
foreach ($tab as $t) {
    if ($t>$max) {
        $max =$t;
    }
    if ($t < $min) {
        $min = $t;
    }
}

echo 'max' . $max .'</br>';
echo 'min' . $min . '</br>';

?>
