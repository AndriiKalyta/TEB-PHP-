<?php

if (!isset($_GET['fullName'])) {
  header('Location:index.php');
}

$fullName = $_GET['fullName'];

?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>Andrii Kalyta</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="CSS/style_login.css">
    </head>
    <body>
        <header>
            <div class="logo"> <img src="images/logo-edu.png" alt="Logo TEB"></div>
            <div class="name"> <?php echo $fullName ?> </div>
        </header>
    
        <div class="box">
            <div class="boxLogin">TODO</div>
        </div>

</body>
</html>