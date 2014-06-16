<?php 
include ('sounds.php'); // include the arrays of sounds

$myArray = json_decode(file_get_contents('php://input'), true);
$idParent = $myArray['idParent'];
$id = $myArray['id'];
$path_of_bell = '';

if ($idParent == 'meeting-bell') {
	foreach ($meeting_bells as $name_of_bell => $url_of_bell) {
		if ($id == $name_of_bell) {
			$path_of_bell = $url_of_bell;
		}
	}
} 

if ($idParent == 'coffee-triangle') {
	foreach ($coffee_triangles as $name_of_bell => $url_of_bell) {
		if ($id == $name_of_bell) {
			$path_of_bell = $url_of_bell;
		}
	}
} 

if ($idParent == 'lunch-train') {
	foreach ($lunch_train_whistles as $name_of_bell => $url_of_bell) {
		if ($id == $name_of_bell) {
			$path_of_bell = $url_of_bell;
		}
	}
} 



// $myFile = '~/Desktop/andrew.txt';
// // $id = 'test';
// shell_exec("echo $idParent > $myFile");
// shell_exec("echo $id >> $myFile");
// shell_exec("echo $path_of_bell >> $myFile");


shell_exec('sudo aplay $path_of_bell'); 
// shell_exec('sudo aplay /home/andrew/www/audio/meeting-bell/short-bell.wav 2> /home/andrew/www/errors.txt'); 

?>

