<?php
  $min = null;
  $max = null;

  if (isset($_POST['numbers'])) {
    $val = str_replace(' ', '', $_POST['numbers']);
    //echo $val;
    //$val = $_POST['numbers'];
    $tab = explode(',', $val);
    var_dump($tab);
    $max = $tab[0];
    $min = $tab[0];
    foreach ($tab as $t) {
      if ($t > $max) {
        $max = $t;
      }
      
      if ($t < $min) {
        $min = $t;
      }
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JavaScript-Ceny biletów</title>
  </head>
  <body>
    <form action = "#" method = "POST">
      <input type = "text" name = "numbers"  id ="data" onkeyup="dis()">
      <input type = "submit" value = "Oblicz" disabled id = "but">
    </form>
    <?php 
      echo $min . ' / ' . $max;
    ?> 
    <script>
    function dis () {
    let val = document.getElementById('data').value;
    //let but = document.getElementById('but').value;
    if (val != null && val !="") {
      but.removeAttribute('disabled', false);
      console.log('yes');
    } else  {
      console.log('no');
      but.setAttribute("disabled", "disabled");
    }
  }
  //setAttribute
  //removeAttribute
  //isNaN(val) || !isNaN(val)
  //val != null

    </script>
    
  </body>
</html>