<?php

$host = 'localhost';
$user = 'root';
$passowrd = '';
$dbname = 'pdoposts';


//set dsn

$dsn = 'mysql:host='. $host . ';dbname=' .$dbname;


$pdo = new PDO($dsn , $user , $passowrd);


$stmt = $pdo->query('SELECT * FROM posts') ;


// while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
//     echo $row['title'] . '<br>' ;
// }


while($row = $stmt->fetch(PDO::FETCH_OBJ)){
    echo $row->title . '<br>' ;
}