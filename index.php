<?php
$host = 'localhost';
$dbname = 'okosheleva';
$dbuser = 'okosheleva';
$dbpassword = 'neto1701';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $dbuser, $dbpassword);
   $sqlQuery = "SELECT * FROM `books`";
}
 catch (PDOException $e) {
    die($e->getMessage());
}
	
/*
// подключаемся к серверу
$link = mysqli_connect($host, $dbuser, $dbpassword, $dbname) 
    or die("Ошибка " . mysqli_error($link));
 
// выполняем операции с базой данных
$query ="SELECT * FROM books";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
if($result)
{
    echo "Выполнение запроса прошло успешно";
}
 
// закрываем подключение
mysqli_close($link);*/
?>