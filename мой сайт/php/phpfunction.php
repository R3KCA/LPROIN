<?
//функция формирования строки данных
function treatment()
{
 $fio = trim($_REQUEST['fio']);
 $email = trim ($_REQUEST['email']);
 $message = trim($_REQUEST['message']);
 $phone  = trim($_REQUEST['Phone']);
 $str = 'Имя: '.$fio.' Почта: '.$email.' Телефон: '.$phone.' Сообщение: '.$message;
return $str;
}

//Функция для записи в файл
function write_file($str,$name_file)
{
 $file = fopen($name_file,"a");
 fwrite($file,$str.PHP_EOL);
 fclose($file);
}

//функция для чтения из файла
function read_file($name_file)
{
 $file = fopen($name_file,"r");
 while ($str = fgets($file))
 {
	  echo $str.'<br>';
 }
 fclose($file);
}

//Функция отправки e-mail
function send($email,$text_send)
{   if ($_REQUEST['send'] == true)
     {
      $send_OK = mail($email,"Сообщение с формы обратной связи",$text_send);
	   if ($send_OK == true)
     	{
	       $result = "Сообщение успешно доставлено!";
 	    }
	    else
	    {
	    $result = "Сообщение не доставлено!";
	    }
	 }	
 return $result;
}

//функция инициализации (создания) базы данных
function init_db()
{  
    $host = 'localhost';
    $user = 'sazanovsa_db';
    $pass = 'root12';
	$db   = 'sazanovsa_db'; 
    $link = mysqli_connect($host,$user,$pass,$db);
    //$query = "CREATE DATABASE IF NOT EXISTS ".$name_db;
    //mysqli_query ($link,$query) or die (mysqli_error($link));
return $link;  
}

//функция создания таблиц базы данных
function create_table_db($name_table_db,$link_con)
{   
    $query = "CREATE TABLE ".$name_table_db." (ID INT(5) NOT NULL AUTO_INCREMENT, NAME VARCHAR(50),AGE INT(5), SOLARY INT(5),PRIMARY KEY(ID))";
    mysqli_query ($link_con,$query) or die (mysqli_error($link_con));
}
//функция наполнения таблицы базы данных
function insert_db($name_table_db,$link_con)
{
	$query = "INSERT INTO ".$name_table_db."(id,name,age,solary)";
}

//write_file(treatment(),"log/feedback.txt");
//read_file ("log/feedback.txt");\
echo (send("sazanovsa@gmail.com",treatment()));

$link = create_db ();
//create_table_db("workers",$link);
 insert_db("workers",$link)
?>