<?php
$config = [
    'host' => 'localhost',
    'user' => 'andrii',
    'password'=> '1234',
    'database'=> 'testy181222'
];

$db = new PDO(
    'mysql:host =' . $config['host'] . ';dbname='. $config['database'] . '; charset = utf8',
    $config['user'],
    $config['password'] 
);

if ($db) {
    echo 'Work';
} else {
    echo 'error';
}


// echo '<pre>';
// var_dump($config);
// echo '</pre>';
//phpinfo(); 
?>