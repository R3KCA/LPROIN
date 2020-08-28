<?
//функция инициализации (создания) базы данных
function init_db($name_db)
{
   $query = "CREATE DATABASE IF NOT EXISTS ".$name_db;
   mysqli_query ($link,$query) or die (mysqli_error($link));
 return  $link;
}

//функция (соединение) с базой данных
function connect_db()
{   
    $host = 'localhost';
    $user = 'sazanovsa_db';
    $pass = 'root12';
	$db   = 'sazanovsa_db'; 
    $link = mysqli_connect($host,$user,$pass,$db);
 return $link;  
}

//Создание БД
 init_db("user")
?>