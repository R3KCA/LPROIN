<?
//Станислав
/* Дата задания заданий
   15-06-2019
*/




$separator = "<br> ---------------------------------------------- <br>";

//_______________________________________________________________________
//..............................тема 1.1.................................
//_______________________________________________________________________
echo $separator;
echo         "                       Тема 1.1.                        ";  
echo $separator;

echo "<br>";
echo $separator. "1) Задаиние №1: ";
echo "Приветствие!!!";

echo $separator. "2) Задание №2:. <br>"; 
echo "$"."tv            = название телеканала"."<br>";
echo "$"."adres         = адрес производителя"."<br>";
echo "$"."ColorAvto     = цвет автомобиля".    "<br>";
echo "$"."temperaturH2O = температура воды".   "<br>"; 
echo "$"."ModelPhone    = модель телефона".    "<br>";      

echo $separator. "3) Задание №3:. <br>";
$a = 3; $b = 5; $c = 8;  echo $a." , ". $b." , ".$c.";";  echo "<br>";
$summa = $a+$b+$c;       echo "сумма  = ".$summa;         echo "<br>";
$result = ((2+6+2)/5)-1; echo "$"."result = ".$result;    echo "<br>";

echo $separator. "4) Задание №4:. <br>";
define("const_1",41);
define("const_2",33);
echo "Сумма констант = ".(string) (const_1+const_2);
define("const_2",1);
define("const_1","ПереопределениеКонстанты");

echo $separator. "5) Задание №5:. <br>";
$name = "Стас";
$age  = 32;
$pdn = "Меня зовут ".$name." и  мне ".$age." лет.";
$pdn .= "Я хочу изучать PHP";
echo $pdn;

echo $separator. "6) Задание №6:. <br>";
//арифметические операции
$var = 100; 
$var *= 20; 
$var /= 5;
$var ++;
$var +=11;
$var -= 3;
$var --;

echo $var;

echo "<br>";

//операции со сторокой
$str  = "hello";
$str .= "my";
$str .= "PHP";
$str .= "world";
echo $str;
echo "<br>";

//_______________________________________________________________________
//..............................тема 1.2.................................
//_______________________________________________________________________
echo $separator;
echo         "                       Тема 1.2.                        ";  
echo $separator;

echo $separator. "1) Задаиние №1: ";
$arr = [1,2,3,4,5];
$result = $arr[0] + $arr[1] + $arr[2] + $arr[3];
echo '$result = '.$result * $arr[4]; 

echo $separator. "2) Задание №2:. <br>";
$arDays = [
           1=>'понедельник',
		   2=>'вторник',
		   3=>'среда',
		   4=>'четверг',
		   5=>'пятница',
		   6=>'суббота',
		   7=>'воскресенье'
		  ];
//print_r($arDays); 
echo $arDays[1].' '.$arDays[2].' '.$arDays[3].' '.$arDays[4].' '.$arDays[5].' '.$arDays[6].' '.$arDays[7];                                    

echo $separator. "3) Задание №3:. <br>";
$arrEngDays = [
               monday    =>'понедельник',
			   tuesday   =>'вторник',
			   Wednesday =>'среда',
			   Thursday  =>'четверг',
			   Friday    =>'пятница',
			   Saturday  =>'суббота',
			   Sunday    =>'воскресенье'
			   ];
print_r($arrEngDays);

echo $separator. "4) Задание №4:. <br>";
$arMass1 = ['a','2',1,33,'последний элемент'];
$arMass2 = ['a','b','c',33,'элемент'];
//а
$arMass1['element'] = 9000;
//print_r($arMass1);
//b
unset ($arMass2[0]);
print_r($arMass2);
echo '<br>';
//с
echo '1 маасив = '.$arMass1[2].' ; '.'2 массив = '.$arMass2[2]; 
echo '<br>';
//d
print_r($arMass1);echo '<br>'; 
print_r($arMass2);echo '<br>';
//e
echo 'Количество элементов массив1 = '.count($arMass1); 
echo '<br>';
echo 'Количество элементов массив2 = '.count($arMass2);


//_______________________________________________________________________
//..............................тема 1.3.................................
//_______________________________________________________________________
echo $separator;
echo         "                       Тема 1.3.                        ";  
echo $separator;

echo $separator. "1) Задаиние №1: ";

$x = 15;
define ("MIN",10);
define ("MAX",50);

if (($x>MIN) && ($x<MAX))
{
	echo "+";
}
elseif (($x==MIN)||($x==MAX))
{
    echo  "+-";
}
else
{ 
   echo "-";
}


echo "<br>";


echo $separator. "2) Задание №2:. <br>";
$day = 5;
if ($day >= 1 && $day <=10) 
{
	echo "1 декада месяца";
}	
elseif ($day >= 11 && $day <=20) 
{
	echo "2 декада месяца";
}
elseif ($day >=21 && $day <=31)
{
	echo "3 декада месяца";
}


echo $separator. "3) Задание №3:. <br>";
$month = 9;
if ($month <= 11 && $month >=9)
{
	echo "осень";
}	
elseif ($month <= 8 && $month >=6)
{
	echo "лето";
}
elseif ($month <=5 && $month >=3)
{
   echo "весна";	
}
elseif (($month <=2 && $month >=1) || ($month == 12))
{
	echo "зима";
}
echo $separator. "4) Задание №4:. <br>";
$str  = 'adcde';
if ($str[0] == 'a')
{
	echo "да";
}
else 
{
	echo "нет";
}

echo $separator. "5) Задание №5:. <br>";
$str ='12345';
if (($str[0]==1) || ($str[0] == 2) || ($str[0] == 3))
{
	echo "да";
}
else 
{
	echo "нет";
}

echo $separator. "6) Задание №6:. <br>";
$a = 5;
$b = 4;
$c = 6;
if ((($a < $b) && ($a > $c)) || (($a > $b) && ($a < $c)))
{
	echo $a;
}
elseif ((($b < $a) && ($b > $c)) || (($b > $a) && ($b < $c)))
{
	echo $b;
}
else echo $c;

echo $separator. "7) Задание №7:. <br>";
$a = 1;
$b = 3;
$c = 10;

$D = pow($b,2) - (4*$a*$c);

if ($D > 0)
{
	$x1 = ((-1*$b) + sqrt($D))/(2*$a); echo $x1; echo '<br>';
	$x2 = ((-1*$b) - sqrt($D))/(2*$a); echo $x2;
}
elseif ($D == 0)
{	
     $x = (-1*$b)/(2*a); echo $x;
}
else 
{
	echo "НЕТ КОРНЕЙ";
}

//_______________________________________________________________________
//..............................тема 1.4.................................
//_______________________________________________________________________
echo $separator;
echo         "                       Тема 1.4.                        ";  
echo $separator;

$sum = 0;
echo $separator. "1) Задаиние №1: <br>";
for ($i=1;$i<=25;$i++)
{
	$sum+=$i;
}
echo $sum;

echo "<br>";

$sum = 0;
$i = 1;
while ($i <= 25) 
{
	$sum+=$i;
	$i++;
}
echo $sum;

echo $separator. "2) Задание №2:. <br>";
$arr = [2,5,9,15,0,4];
foreach ($arr as $key => $val)
{
	if (($val >3) && ($val<10))
	{
		echo $val."<br>";
	}
}	

echo $separator. "3) Задание №3:. <br>";
$arr =[0,1,2,-2,4,-5,9,2];
$sum = 0;
foreach ($arr as $key => $val)
{
	if ($val > 0)
	{
		$sum+=$val;
	}
}
echo $sum;

echo "<br>";

$sum = 0;
for ($i=0;$i<count($arr);$i++)
{
	if ($arr[$i] > 0)
	{
		$sum+=$arr[$i];
	}
}
echo $sum;

echo $separator. "4) Задание №4:. <br>";
$arr = [1,2,5,9,4,13,4,10];
foreach ($arr as $key => $val)
{
   if ($val == 4)
	{
		echo 'Есть!';
		break;
	}	
}	

echo $separator. "5) Задание №5:. <br>";
$arr = ['10','20','30','50','235','3000'];
foreach ($arr as $key => $val)
{
	if (($val[0] == '1') || ($val[0] == '2') ||($val[0] == '5'))
	{
	 echo $val."<br>";	
	}
}

echo $separator. "6) Задание №6:. <br>";
$arr = [1,2,3,4,5,6,7,8,9];
$str = '';
foreach ($arr as $key => $val)
{
	$str.='-'.$val;
}	
echo $str;

echo $separator. "7) Задание №7:. <br>";
$arr = [1=>'Понедельник',
        2=>'Вторник',
		3=>'Среда',
		4=>'Четверг',
		5=>'Пятница',
		6=>'Суббота',
		7=>'Воскресенье'];
foreach ($arr as $key=>$val)
{
	if (($key != 6)&&($key != 7)) 
	{
		echo $val.'<br>';
	}
	else 
	{
		echo '<b>'.$val.'</b> <br>';
	}
}


echo $separator. "8) Задание №8:. <br>";
$days = 'Понедельник';
foreach ($arr as $key => $val)
{
    if ($val != $days)
	{
		echo $val.'<br>';
    }	
    else 
	{
		echo '<i>'.$val.'</i> <br>';
	}		

}

//_______________________________________________________________________
//..............................тема 1.5.................................
//_______________________________________________________________________
echo $separator;
echo         "                       Тема 1.5.                        ";  
echo $separator;

$arrMenu = [
             ['URL' =>'/index.php',
              'NAME'=>'Главная',
              'ACTIVE'=>false
             ],
             ['URL' => '/catalog',
              'NAME'=> 'Каталог',
              'ACTIVE'=> true
             ],
             ['URL'=>'/about',
              'NAME'=> 'О компании',
              'ACTIVE'=>true
             ],
             ['URL'=>'/contact',
              'NAME'=> 'Контакты',
              'ACTIVE'=>false	
			 ]			 
           	];
$str= '<ul>'.
       '<li><a href ="/index.php">Главная</a></li>'.
	   '<li><a href ="/catalog">Каталог</a></li>'.
	   '<li><a href ="/about">О компании</a></li>'.
	   '<li><a href ="/contact">Контакты</a></li>'.
	   '</ul>';
echo $str;	

echo '<br>';

echo '<ul>';
foreach ($arrMenu as $key=>$val)
{
	//echo '<li><a href ='.$val['URL'].'>'.$val['NAME'].'</a></li>';    //выводит все
    if ($val['ACTIVE'])
	{
	    echo '<li><a href ='.$val['URL'].'>'.$val['NAME'].'</a></li>';  // выводит только активные	
	}	
}	
echo '</ul>';

$arr = [1,27,2,0,-4,44,7,5,10,14,24];
$max = $arr[0];
$key = 0;
for ($i=1;$i<=count($arr);$i++)
{
   if ($arr[$i]>$max)
   {
	 $max = $arr[$i];
     $key = $i;	 
   }	   
}

//echo $max;
echo 'ДО <br>';
echo '<pre>';
print_r($arr);
echo '</pre>';


$krElement = count($arr)-1;
$temp = $arr[$krElement];
$arr[$key] = $temp;
$arr[$krElement] = $max;

echo 'ПОСЛЕ <br>';
echo '<pre>';
print_r($arr);
echo '</pre>';

//_______________________________________________________________________
//..............................тема 1.6.................................
//_______________________________________________________________________
echo $separator;
echo         "                       Тема 1.6.                        ";  
echo $separator;

$n = 4; //размерность матрицы

echo $separator. "1) Задаиние №1: <br>";
for ($i=0;$i<$n;$i++){
	for ($j=0;$j<$n;$j++){
      $Matrix[$i][$j] = rand(1,9);
	}
} 
for ($i=0;$i<$n;$i++){
echo '<br>';	
  for ($j=0;$j<$n;$j++){
  //echo '<pre>';
    echo $Matrix[$i][$j].' ';
  //echo '</pre>';	
  }
}

echo '<br>';	
$min = $Matrix[1][0];
$max = $Matrix[0][1];
for ($i=0;$i<$n;$i++){
	for ($j=0;$j<$n;$j++){
      //min
	  if ($i>$j) 
	  {
		 //echo $Matrix[$i][$j].'<br>';
		 if ($min>$Matrix[$i][$j]) 
		 {
			 $min = $Matrix[$i][$j];
		 }
	  }
     //max	
	  if ($i<$j) 
	  {
		 //echo $Matrix[$i][$j].'<br>';
		 if ($max<$Matrix[$i][$j]) 
		 {
			 $max = $Matrix[$i][$j];
		 }
	  }	 
	}
}

echo 'MIN = '.$min.' MAX = '.$max;

echo $separator. "2) Задание №2:. <br>";
for ($i=0;$i<$n;$i++){
	for ($j=0;$j<$n;$j++){
      $Matrix1[$i][$j] = rand(-100,100);
	  $Matrix2[$i][$j] = rand(-100,100);
	}
} 
//matrix 1
for ($i=0;$i<$n;$i++){
echo '<br>';	
  for ($j=0;$j<$n;$j++){
     echo $Matrix1[$i][$j].' ';
  }
}
//matrix 2
echo '<br>';
for ($i=0;$i<$n;$i++){
echo '<br>';	
  for ($j=0;$j<$n;$j++){
     echo $Matrix2[$i][$j].' ';
  }
}
//matrix 3
for ($i=0;$i<$n;$i++){
	for ($j=0;$j<$n;$j++){
      $Matrix3[$i][$j] = $Matrix1[$i][$j]+$Matrix2[$i][$j];
    }
}
echo '<br>';
for ($i=0;$i<$n;$i++){
echo '<br>';	
  for ($j=0;$j<$n;$j++){
     echo $Matrix3[$i][$j].' ';
  }
}

echo $separator. "3) Задание №3:. <br>";
$m = 2;
for ($i=0;$i<$m;$i++){
	for ($j=0;$j<$n;$j++){
      $Matrix[$i][$j] = rand(1,9);  
	}
}

for ($i=0;$i<$m;$i++){
echo '<br>';	
  for ($j=0;$j<$n;$j++){
     echo $Matrix[$i][$j].' ';
  }
}

echo '<br>';
$arrM=[];
for ($j=0;$j<$n;$j++){
	for ($i=0;$i<$m;$i++){
       $arrM[] = $Matrix[$i][$j];  
	}
}
for ($i=0;$i<count($arrM);$i++){
 echo $arrM[$i].'*';
}

echo $separator. "4) Задание №4:. <br>";

for ($i=0;$i<$n;$i++){
	for ($j=0;$j<$n;$j++){
      $Matrix[$i][$j] = rand(1,9);
	}
} 
echo '<br> ДО <br>';

for ($i=0;$i<$n;$i++){
echo '<br>';	
  for ($j=0;$j<$n;$j++){
      echo $Matrix[$i][$j].' ';
  }
}
$arrM =[];
for ($i=0;$i<$n;$i++){
	for ($j=0;$j<$n;$j++){
     if ($i==$j)
	 {
		$arrM[$i] = $Matrix[$i][$j];
	 }
 }
}
sort($arrM);

//echo '<br>';
//print_r($arrM);
//echo '<br>';

for ($k=0;$k<$n;$k++)
{
  $Matrix[$k][$k] = $arrM[$k];
  //echo $Matrix[$k][$k];
}

echo '<br> ПОСЛЕ <br>';
for ($i=0;$i<$n;$i++){
echo '<br>';	
  for ($j=0;$j<$n;$j++){
       echo $Matrix[$i][$j].' ';
  }
}
?>

<!DOCTYPE html>
<html>
  <head>
     <title> Таблица верстка </title>
  </head>
   <body>
       текст
   </body>
</html>

