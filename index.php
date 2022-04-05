<?php

require_once 'src/functions.php';

echo "<br>";
echo task1(['hello', 'world']);

echo "<br><br><br>";
var_dump(task1(['hello', 'world'], true));


echo "<br><br><br>";
task2('+', 1, 2, 3, 5.2);
echo "<br>";
task2('-', 10, 2, 3, 5.2);
echo "<br>";
task2('*', 10, 2, 3, 5.2);
echo "<br>";
task2('/', 10, 2, 3, 5.2);


echo "<br><br><br>";
task3(10.4, 3.4);
echo "<br><br>";
task3(4.4, 8);
echo "<br><br>";
task3(5, 11.3);
echo "<br><br>";
task3(3, 7);


echo "<br><br>";
echo "<br>Текущая дата: " . date('d.m.Y H:i');
echo "<br>Unixtime: " . strtotime('24.02.2016 00:00:00');


echo "<br><br>";
echo "<br>" . str_replace('К', '', 'Карл у Клары украл Кораллы');
echo "<br>" . str_replace('Две', 'Три', 'Две бутылки лимонада');
echo "<br>" . str_replace(['Две', 'бутылки'], ['пять', 'бочек'], 'Две бутылки лимонада');


echo "<br><br>";
$filepath = realpath(__DIR__) . DIRECTORY_SEPARATOR . 'test.txt';
$content = 'Hello again!';
file_put_contents($filepath, $content);

$from_file = file_get_contents($filepath);
var_dump($filepath);
echo "<br>";
var_dump($from_file);
