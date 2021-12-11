<?php
/*
$fav_games = ["RDR 2", "Mafia 2"];
$fav_games[] = "APEX";
$fav_games[] = "GTAV";
unset($fav_games[2])

array_push($fav_games ("CS:GO")

echo $fav_games[3];
$person = [
    "name" => "Sergey",
    "age" => 32,
    "fav_games" => ["RDR 2", "Mafia 2"]
];
$person["fav_games"][] ='GTAV';

echo $person["name"] . " " . $person["age"] . " " . $person["fav_games"][2];

$number = 0;

while ($number <= 100) {
	echo$number . "<br >";
	$number = $number + 1;
}

$lenght = 0;
$fav_games = ["RDR 2", "Mafia 2"];
echo "<h1>Мои любимые игры</h1>";

while ($lenght <= 1) {
	echo $fav_games[$lenght] . "<br />";
	$lenght = $lenght + 1;
}


foreach ($fav_games as $item) {
    echo "$item <br />";
}


$a = 9;
$b = 9;

if ($a > $b) {
	echo "a > b";
}elseif ($a == $b) {
	echo "a = b";
}
else {
	echo "b > a";
}


$person = [
    "name" => "Sergey", // обычные  k => v
    "age" => 32, // обычные k => v
    "fav_games" => ["TLOU", "RDR 2"] // обычные k => array
];


foreach($person as $key => $value) {
    // условие: если массив, то перебор
    // если не массив, то вывод
    if (is_array($value)) {
        echo "<h1>Мои любимые игры</h1>";
        foreach($value as $k => $v) {
            echo "$v <br />";
        }
    }else {
        echo "$key: $value <hr /> <br />";
    }
}


$x = 1;
if ($x == 0) {
    echo "x = 0";
}elseif ($x == 1) {
    echo "x = 1";
}elseif ($x == 2) {
    echo "x = 2";
}

switch ($x) {
    case 0:
        echo "x = 0";
        break;
    case 1:
        echo "x = 1";
        break;
    case 2:
        echo "x = 2";
        break;
    default:;
        echo "x не равен";
        break;
}


$array = ["TLOU", "MAFIA 2"];

echo "<h1>my favorite games:</h1><hr />";
/*foreach($array as $key => $value) {
    echo "<h1>$key -. $value</h1>"
}

$key = 0;
do {
    echo "<h1>$array[$key]</h1>";
    $key = $key + 1;
} while ($key < 1);

$x = 0;
while($x++<10) {
    if ($x == 3) continue;
    echo "$x";
}

for ($i=0; $i < 10; $i++) {
    echo "<h1>$i</h1><br />";
}




//require
//require_once
//include
//include_once
*/
//require_once "resources/views/template.php";

/*
<?php $genders=["male","female"]; ?>

<? foreach($genders as $gender): ?>
    <h1><?=$gender;?></h1>
    <? endforeach;?>*/

// sumNumbers camelcase
// sun_numbers snakecase
// Типы данных:
// int
// float
// bool
// array
// string
// callable
// CLASS, OBJECT
/*
declare(strict_types=1);
*/
/*
/**
 * Суммируемдва числа одно из которых является лямбдой
 * @param  int      $a [description]
 * @param  callable $b [description]
 * @return [type]      [description]
 */
/*

 /*function sumNumber(int $a , callable $b) : int
{

    $t = is_callable ($b())
    if $t === true
    else return 0

    $result = $a + $b();
    return $result;
}

function kv(int $a) : float
{
    return pow($a, 2);
}

echo kv(sumNumber(7, function (){return 5;}));
echo "</br>";

echo; kv(13);
echo "</br>";

//echo sumNumber ()*/
/**
 * Деление двух чисел
 *
 * @param  int    $a [description]
 * @param  int    $b [description]
 * @return [type]    [description]
 */
/*function dl (int $a, int $b) : float
{
    return $a/$b;
}
try {
    echo "Start";
    echo dl(5,0);
}catch (ErrorExeption $e) {
    echo "Ошибка:" . $e->getCode();
} finally {
    echo"Конец";
}



function factorial ()
{
    $i = 45;
    for ($i = 0, $i < = 10; $i++) {

    }
}

Прочитать что такое composer, noda, NPM, Trello, Git, SCSS/Sars, JS, ASYNC,
Основы ООП, класс=>Объекту
Функции= методы класса (только изнутри класса!)
Свойства ООП:
Абстракция
Инспикуляция
Полиморфизм
Наследование

*/

declare(strict_types=1);
require_once "classes/SchoolchildrenClass.php";

$children = new SchoolchildrenClass(0, "MEN", "Олэг", 3, "Цой");
$children->info();

$children = new SchoolchildrenClass(1, "MEN", "Bully", 10, "Анигилятор 3000");
$children->info();


?>