<?php
header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');


$data = file_get_contents('users.txt');

echo "data: {$data}\n\n";
flush();

// $time = date('r');
// echo "data: The server time is: {$time}\n\n";
// flush();
?>