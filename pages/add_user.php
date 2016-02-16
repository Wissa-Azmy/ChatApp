<?php
require 'db-connect.php';
require 'user.php';

if (isset($_POST['userName'])) {
//        echo " inside the insert function";
        $user = new user;
				// echo $_POST['userName'];
        $user->userName = $db->escape_string($_POST['userName']);
				$user->password = $db->escape_string($_POST['password']);
        $user->email = $db->escape_string($_POST['email']);

        // $user->photo = $db->escape_string($_POST['photo']);

//        $product->photo = ($_FILES['photo']['name']);

        // $photo_tmp = $_FILES['photo']['tmp_name'];
        // move_uploaded_file($photo_tmp, "../images/$user->photo");

        // Form Validation Requiered in advance.


        $user->insert();
       header('location:../login/index.php');

    }
?>
