<?php
$users = [
    0 => [
    'login' => 'adam123',
    'password' => 'test12345',
    'fullName' => 'Adam Nowak',
    ],
    1 => [
    'login' => 'anna0000',
    'password' => 'tajneHaslo',
    'fullName' => 'Anna Kowalska',
    ],
    2 => [
    'login' => '999tomasz',
    'password' => '1234567890',
    'fullName' => 'Tomasz Kwiatkowski',
    ],
    3 => [
    'login' => 'admin123',
    'password' => 'AdminAdmin',
    'fullName' => 'Administrator',
    ],
    ];
    
$error = null;

if (isset($_POST['login']) && isset ($_POST['password'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];
    foreach ($users as $user) {

            if ($user['login'] == $login  && $user['password'] == $password){
                
                header('Location:login.php?fullName='.$user['fullName']);
                
                exit;
            } else {
                $error = 'Login lub haslo są źle';
            }  
        
    }
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Andrii Kalyta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/style_index.css">
</head>
<body>
    <header>
        <div class="logo"> <img src="images/logo-edu.png" alt="Logo TEB"></div>
        <div class="name">Imie i Nazwisko - dopiero po zalogowaniu sie</div>
    </header>
    
<div class="box"> 
    <div class="boxLogin">
        <form action="#" method="POST">
            <p class="error"><?php echo $error ?> </p>
            <div class="label">Login</div>
            <input id="login" type="text" class="form-control" name="login">
            <div class="label">Password</div>
            <input id="password" type="password" class="form-control" name="password" >
            <div class="buttom">
                <button class="btn btn-primary mb-3" type="submit" onclick="validate()">LOGIN</button>
            </div>
        </form>
    </div>
</div>


    <script>
            
        function validate () {
            let login = document.getElementById('login').value;
            let password = document.getElementById('password').value;
            if (login.length < 4  || password.length < 8) {
                alert ("Login lub haslo za slabe!");
                event.preventDefault();
            } 
        }

    </script>

        

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        
</body>

    
</body>
</html>