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
    $user->insert_id;
    if ($result) {
        echo "New user registered";
        $_SESSION["user"] = ["username" => $username, "email" => $email, "user_id" => $user->insert_id];
    } else {
        echo "New user not registered";
    }
    } else if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $username = "";
        $user_id = 0;
        $query = "select * from users where email='$email' and password='$password'";
        $result = $conn->query($query);
        if ($result->num_rows == 1) {
            foreach ($result as $row) {
                $username = $row['username'];
                $user_id = $row['id'];
            }
            $_SESSION["user"] = ["username" => $username, "email" => $email, "user_id" => $user_id];
            header("location: /discuss");
        } else {
            echo "New user not registered";
        }
    } else if (isset($_GET['logout'])) {
        session_unset();
        header("location: /discuss");
    }else if (isset($_POST["ask"])) {
        $title = $_POST['title'];
        $description = $_POST['description'];
        $category_id = $_POST['category'];
        $user_id = $_SESSION['user']['user_id'];
        $question = $conn->prepare("Insert into `questions`
    (`id`,`title`,`description`,`category_id`,`user_id`)
    values(NULL,'$title','$description','$category_id','$user_id');
    ");
        $result = $question->execute();
        $question->insert_id;
        if ($result) {
            header("location: /discuss");
        } else {
            echo "Question is added to website";
        }
    }
?>