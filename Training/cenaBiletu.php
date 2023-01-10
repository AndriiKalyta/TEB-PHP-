<?php
$price = NULL;
if (isset($_POST['distance'])) {
    $val = $_POST['distance'];
    //echo $val . '</br>' ;
    
     if ( $val > 0 && $val <= 10) {

        $price = 2;

     } elseif ($val > 10 && $val <=30 ){
        $price = 1 +($val * 0.1);
        //echo '<h1 name = "result">'. $price;

     } elseif ($val > 30) {
        $price = 1 +($val * 0.08);
        //echo '<h1 name = "result">'. $price;
     }
    


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
        <input type="text" name ="distance" min = "1">
        <input type="submit" value=" Oblicz">
          <h1> <?php 
        //    if (isset($price)){
        //     echo  'Cena biletu: ' .$price . ' zl';
        //    }
            echo $price;
          ?> </h1>
    </form>
    
    <script>
        
        // let x = prompt('Długość trasy w km')
        // if(x>0,x<=10) {
        //     alert('Cena biletu 2zl');
        // } else if(x>10 && x<=30) {
        //     let result=1+x*0.1
        //     alert('Cena biletu '+result);
        // } else if(x>30){
        //     let result=1+x*0.08
        //     alert('Cena biletu '+result)
        // }
    </script>
</body>
</html>