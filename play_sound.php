<?php 
$myArray = json_decode(file_get_contents('php://input'), true);
$id = $myArray['id'];

$meeting_bell_sounds = array('~/Desktop/test.mp3');



// $the_error = shell_exec('mpg123 ~/Desktop/test.mp3; echo $?'); 
// exec ( 'mpg123 ~/Desktop/test.mp3' , $output, $return );


exec('ls -la', $outputArray);
$return = print_r($outputArray);


shell_exec('print_r($return) > ~/Desktop/andrew.txt');
// shell_exec('mpg123 $meeting_bell_sounds[0]'); 
// shell_exec('mpg123 $meeting_bell_sounds[rand(lengthOf($meeting_bell_sounds))]'); 


?>

<p><?php echo 'test'; ?></p>
