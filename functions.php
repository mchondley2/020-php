<?php

function simpleFunction() {
	echo '<p>Hello World</p></br>';
}

function simpleGreeting($name = 'Fabulous') {
//	echo '<p>Hello, ' . $name . '!</p></br>';
	echo "<p>Hello, $name!</p></b>";
}

simpleFunction();
simpleGreeting();

?>