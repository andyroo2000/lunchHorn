<?php 
include ('sounds.php'); // include the arrays of sounds

$myArray = json_decode(file_get_contents('php://input'), true);
$id = $myArray['id'];
$idParent = $myArray['idParent'];

foreach ($idParent as $name => $file_location) {
	if ($name == $id) {
		$path_of_file_to_play = $file_location;
	}
}
// $meeting_bell_sounds = array('~/Desktop/test.mp3');



// $the_error = shell_exec('mpg123 ~/Desktop/test.mp3; echo $?'); 
// exec ( 'mpg123 ~/Desktop/test.mp3' , $output, $return );


// shell_exec('play ~/Desktop/correctamundo.wav');
// shell_exec('play ~/Desktop/correctamundo.wav');

$myFile = '~/Desktop/andrew.txt';
// $id = 'test';
shell_exec("echo $idParent > $myFile");

// shell_exec('echo $id > ~/Desktop/andrew.txt');
// shell_exec('print_r($return) > ~/Desktop/andrew.txt');
// shell_exec('mpg123 $meeting_bell_sounds[rand(lengthOf($meeting_bell_sounds))]'); 

// shell_exec("sudo /usr/local/bin/mpg123 ~/Desktop/test.mp3" ); 

?>

