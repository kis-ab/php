<?php
include "../src/function.php";

echo "<b>Задание 1</b>";
task1([1,2,3], false);
echo '<br>';

echo "<b>Задание 2</b> <br>";
echo "Результат: " . task2('+', 5, 7);
echo '<br>';
echo '<br>';

echo "<b>Задание 3</b> <br>";
echo task3(5, 7);
echo '<br>';
echo '<br>';

echo "<b>Задание 4</b> <br>";
date_default_timezone_set('Etc/GMT-5'); // Время Екатеренбурга
echo date('d.m.Y. H:i');
echo '<br>';
echo strtotime('24.02.2016 00:00:00');
echo '<br>';
echo date('Y-m-d H:i:s', 1456254000);
echo '<br>';
echo '<br>';

echo "<b>Задание 5</b> <br>";
$string = 'Карл у Клары украл Кораллы';
$string2 = 'Две бутылки лимонада';
echo str_replace('К', '', $string);
echo '<br>';
echo str_replace('Две', 'Три', $string2);
echo '<br>';
echo '<br>';

echo "<b>Задание 6</b> <br>";
file_put_contents('test.txt', 'Hello again');
my_file_get_contents('test.txt');