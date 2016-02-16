<?php

class user{

  var $id;
	var $userName;
	var $password;
  var $email;

	public function __construct($id=-1) {
        global $db;
		if($id!=-1) { // To view only one product by id if it's sent with the constructor.
			$query = "SELECT * FROM user WHERE id=$id LIMIT 1";
			$result = $db->query($query);
			$usr = $db->fetch_assoc($result);

			$this->id = $usr['id'];
      $this->userName = $usr['username'];
			$this->password = $usr['password'];
      $this->email = $usr['email'];
		}
	}

	function insert() {
        // echo $this->userName + $this->email;
        global $db;
        $query = "SELECT * FROM user WHERE username LIKE '$this->userName'";
        $sql = $db->query($query);

        $rows = $db->num_rows($sql);

        if($rows > 0){
            echo "Invalid, You are trying to add a user that already exists.";
            exit();
        }else {
            $query = "INSERT INTO user VALUES(NULL,'$this->userName','$this->password','$this->email', now(), NULL)";
            $db->query($query) or die("Error adding user $this->userName");
            header('location:../login/index.php');
            return $db->insert_id();
        }
	}

	function update() {
        global $db;
		$query = "UPDATE admin SET username='$this->userName', password='$this->password' where id=$this->id";
		$db->query($query);
	}

	function delete() {
        global $db;
		$query = "DELETE FROM admin WHERE id=$this->id";
		$db->query($query);
	}

	static function viewAll() {
        global $db;
		$query = "SELECT * FROM admin";
		$result = $db->query($query);
		$data = [];

		while($row = $db->fetch_assoc($result)) {
			$data[] = $row;
		}
		return $data;
	}

}

?>
