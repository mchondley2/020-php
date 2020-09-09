<?php

# $_SERVER SUPERGLOBAL

// Create server array

$server = [
	'Host Server Name' => $_SERVER['SERVER_NAME'],
	'Host Header' => $_SERVER['HTTP_HOST'],
	'Server Software' => $_SERVER['SERVER_SOFTWARE'],
	'Document Root' => $_SERVER['DOCUMENT_ROOT'],
	'Current Page' => $_SERVER['PHP_SELF'],
	'Script Name' => $_SERVER['SCRIPT_NAME'],
	'Absolute Path' => $_SERVER['SCRIPT_FILENAME'],
];
//print("<pre>" . print_r($server, true) . "</pre>");
// Create client array

$client = [
	'Client System Info' => $_SERVER['HTTP_USER_AGENT'],
	'Client IP' => $_SERVER['REMOTE_ADDR'],
	'Remote Port' => $_SERVER['REMOTE_PORT'],
];

//print("<pre>" . print_r($client, true) . "</pre>");
$_GET['michele'] = 'Awesome ninja';

print("<pre>" . print_r($_GET, true) . "</pre>");
$nids = array();
$pa = "core/scholars/scholar/4066";
$nids = explode("/", $pa);
$nidcount = count($nids);
//return $nids[$nidcount-1];
$last = $nidcount - 1;

print("<pre>" . print_r($nids, true) . "</pre>");
echo "There are $nidcount pieces to this array.<br>";
echo "The index of the last one is $last.<br>";
echo "The value of the last one is $nids[$last].<br>";

?>