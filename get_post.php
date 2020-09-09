<?php

/*if (isset($_GET['email'])) {
echo $_GET['email'];
}
 */

if (isset($_GET['name'])) {
	//echo $_GET['name'];
	$name = htmlentities($_GET['name']);
	//print_r($_GET);
	//print("<pre>" . print_r($_GET, true) . "</pre>");
}

/*

/*
if (isset($_POST['name'])) {
$name = htmlentities($_POST['name']);
echo $name;
print("<pre>" . print_r($_POST, true) . "</pre>");
}

if (isset($_REQUEST['name'])) {
$name = htmlentities($_REQUEST['name']);
echo $name;
print("<pre>" . print_r($_REQUEST, true) . "</pre>");
}
 */

//echo $_SERVER[QUERY_STRING];

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>My Website</title>
</head>
<body>
	<form method="GET" action="get_post.php">
		<div>
			<label >Name</label><br>
			<input type="text" name="name">
		</div>
		<div>
			<label >Email</label><br>
			<input type="text" name="email">
		</div>
		<input type="submit" value="Submit">
	</form>

	<!-- You can pass a value in a query string for an anchor tag. -->
	<ul>
		<li>
			<a href="get_post.php?name=Brad">Brad</a>
		</li>
		<li>
			<a href="get_post.php?name=Steve">Steve</a>
		</li>
	</ul>

	<h1><?php echo "Profile for {$name}"; ?></h1>


</body>
</html>