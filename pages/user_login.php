<?php
session_start();
if(isset($_SESSION['manager'])){
	header("location:../chatroom/index.php");
	exit();
}

require 'db-connect.php';

if(isset($_POST['username']) && isset($_POST['password'])) {

    $adminUser = preg_replace('#[^A-Za-z0-9]#i', "", $_POST['username']);
    $password = preg_replace('#[^A-Za-z0-9]#i', "", $_POST['password']);

    $query = "SELECT id FROM user WHERE username='$adminUser' AND password='$password'";

$sql = $db->query($query);

$existCount = $db->num_rows($sql);

if ($existCount == 1) {
    $row = $db->fetch_assoc($sql);
    $id = $row["id"];

    $_SESSION['id'] = $id;
    $_SESSION['manager'] = $adminUser;
    $_SESSION['password'] = $password;

    header("location: ../chatroom/index.php");
    exit();

} else {
    echo 'User Not Found, <a href="../login/index.php">try again</a>';
    exit();
}
}
?>
