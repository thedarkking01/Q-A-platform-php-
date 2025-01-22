<?php
session_start();
include ("../common/db.php");
if (isset($_POST['signup'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $user = $conn->prepare("Insert into `users`
(`id`,`username`,`email`,`password`,`address`)
values(NULL,'$username','$email','$password','$address');
");
    $result = $user->execute();
    if ($result) {
        echo "New user registered";
        $_SESSION["user"] =["username"=>$username,"email"=>$email];
    } else {
        echo "New user not registered";
    }

}
?>