<?php
define("BR", '<br/>');

//Indexed arrays
$cars = array('hyundai', 'ford', 'mazda');
echo '<h2>' . $cars[2] . '</h2>' . BR;

$persons = ['henry', 'thomas', 'james'];
$persons[] = 'kevin';
echo '<h2>' . $persons[3] . '</h2>' . BR;

$ids = [14, 29, 17];
echo '<h2>' . $ids[2] . '</h2>' . BR;
print("<pre>" . print_r($persons, true) . "</pre>");
print BR;
var_dump($persons);

//Associative arrays
//
$people = array('Mary' => 35, 'Doe' => 22, 'Jane' => 32);
print_r($people);
print BR;
print("<pre>" . print_r($people, true) . "</pre>");
var_dump($people);
print BR;

$autos = array(
	array('Honda', 20, 15),
	array('Hyundai', 100, 170),
	array('Toyota', 120, 10),
	array('Volvo', 20, 8),
);
print $autos['Honda'][0];
print BR;
print("<pre>" . print_r($autos, true) . "</pre>");
print BR;
var_dump($autos);
print BR;
?>