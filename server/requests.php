<?php  
if(isset($_POST['signup'])){
    echo "User name is ".$_POST['username']."<br/>";
    echo "User email is ".$_POST['email']."<br/>";
    echo "User password is ".$_POST['password']."<br/>";
    echo "User address is ".$_POST['address']."<br/>";
}
?>