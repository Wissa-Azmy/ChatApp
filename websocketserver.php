<?php
require_once 'websockets.php';
class WSServer extends WebSocketServer{

	protected static $myusers;

	public function init(){
		$this->myusers = new SplObjectStorage;
	}
	protected function process($user,$message){
		echo 'someone sent '.$message;
		foreach ($this->myusers as $client) {
			$this->send($client, $message);
		}
	} // Called immediately when the data is recieved.
  protected function connected($user){
  	echo 'someone connected'.PHP_EOL;
  	$this->myusers->attach($user);
  }        // Called after the handshake response is sent to the client.
  protected function closed($user){
  	echo 'someone disconnected'.PHP_EOL;
  	$this->myusers->detach($user);

  }
}

$server = new WSServer('0.0.0.0','8888');
$server->init();
$server->run();
echo 'server listening to port 8888';
