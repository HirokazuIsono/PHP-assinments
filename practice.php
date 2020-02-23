<?php
echo 'hello php!';
echo "\n";
$a = 3;
$b = 7;
echo $a + $b;
echo "\n";
$array_month = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
echo $array_month[7];
echo "\n";
$hello = "Hello ";
$name = "Hiro";
$world = "'s World!";
echo $hello . $name . $world;
echo "\n";
$tech_boost = "tech";
$tech_boost .= " boost";
echo $tech_boost;
echo "\n";
$calendar_2018 = [ "January" => "1月", "February" => "2月", "March" => "3月", "April" => "4月", "May" => "5月", "June" => "6月", "July" => "7月", "August" => "8月", "September" => "9月", "October" => "10月", "November" => "11月", "December" => "12月"];
echo $calendar_2018["December"];
echo "\n";
$name = "Isono";
if ($name = "Isono") {echo "私は　Isono　です";}
else {echo "あなたの名前ではありません";}
echo "\n";
$total = 0;
echo $total;
"\n";
for($i = 1; $i <10001; $i++) {$total += $i;}
echo $total;
echo "\n";
$fruits = array("apple", "orange", "pineapple", "banana", "grape");
foreach($fruits as $fruit){echo $fruit;
echo "\n";}
$start = 1;
$end = 100;
for($i = $start; $i <= $end; $i++){if($i % 5 == 0){echo $i; echo "\n";}}
echo "\n";