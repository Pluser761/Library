<?php
//$host = 'localhost'; // адрес сервера
//$database = 'library'; // имя базы данных
//$user = 'user'; // имя пользователя
//$password = '440054qQ'; // пароль
//
//// подключаемся к серверу
//$link = mysqli_connect($host, $user, $password, $database)
//or die("Ошибка " . mysqli_error($link));
//
//// выполняем операции с базой данных
//$query ="SELECT * FROM books";
//$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
//if($result)
//{
//    echo "Выполнение запроса прошло успешно";
//}

try {
    
$pdo = new PDO('mysql:host=localhost;dbname=library;charset=utf8','user','440054qQ');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
echo $e->getMessage();

}
?>