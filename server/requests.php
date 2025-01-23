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
    } else if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $username = "";
        $query = "select * from users where email='$email' and password='$password'";
        $result = $conn->query($query);
        if ($result->num_rows == 1) {
            foreach ($result as $row) {
                $username = $row['username'];
            }
            $_SESSION["user"] = ["username" => $username, "email" => $email];
            header("location: /discuss");
        } else {
            echo "New user not registered";
        }
    } else if (isset($_GET['logout'])) {
        session_unset();
        header("location: /discuss");


}
?>