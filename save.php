<?php
//Get the Form Values
if (isset($_POST['name'])) {
    if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['subject']) || empty($_POST['message'])){
        return FALSE;
    }else{
    //Make Variables Safe
    mysql_connect('localhost', 'root', 'password');
    $name = mysql_real_escape_string(trim($_POST['name']));
    $email = mysql_real_escape_string(trim($_POST['email']));
    $subject = mysql_real_escape_string(trim($_POST['subject']));
    $message = mysql_real_escape_string(trim($_POST['message']));
    $query = "INSERT INTO `users` (`name`, `email`, `subject`, `message`) VALUES ('$name', '$email', '$subject', '$message')";
    $result = mysql_query($query) or die(mysql_error());
}
}else {
   header('Location: index.html');
}
?>