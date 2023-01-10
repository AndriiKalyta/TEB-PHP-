<?php

if (isset($_POST['distance'])) {
    $val = $_POST['distance'];
    $val = str_replace(' ', '', $val);
    $tab = explode("," , $val );
    $min = $tab[0];
    $max = $tab[0];
    foreach ($tab as $value){
        if ($value > $max){
            $max = $value;
        }
        if ($value < $min){
            $min = $value;
        } 
    }

    echo $min. 'min </br>';
    echo $max. 'max </br>';


    echo '<pre>';
    var_dump ($tab);
    echo '</pre>';
   
    


}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action ="#" method="post">
        <input type="text" name ="distance" >
        <input type="submit" value=" Oblicz">
        
    </form>
    
    
</body>
</html>