<?php

$lastmodified = $_GET['timestamp'];

$filename = 'users.txt';

$filemodified = filemtime($filename);


// if($lastmodified < $filemodified){
	
// 	$data = file_get_contents($filename);
// 	echo $data;
// }

while($lastmodified >= $filemodified){
	usleep(5000);
	clearstatcache();
	$filemodified = filemtime($filename);
}



$data = file_get_contents($filename);

$hamada  = array('data' => $data ,
				'timestamp' => $filemodified
				 );
echo json_encode($hamada);
