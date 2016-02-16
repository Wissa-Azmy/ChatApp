<?php
header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');
header('Access-Control-Allow-Origin: *');  

$filename = 'users.txt';
$lastmodified = 0;
$filemodified = filemtime($filename);


while(true){
	if($lastmodified != $filemodified){
		$data = file_get_contents($filename);
		$response = array('msg' => $data );
		$response= json_encode($response);

		
		echo "data: $response".PHP_EOL;
		echo PHP_EOL;
		
		$lastmodified = $filemodified;
		usleep(1000);
		ob_flush();
		flush();
	}
}