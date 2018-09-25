<?php
    $connect = mysqli_connect("localhost", "root", "", "wangaris_kitchen");

    $username = $_POST['user'];
    $password = $_POST['pass'];

    $username = stripcslashes($username);
    $password = stripcslashes($password);

    $result = mysqli_query($connect,"SELECT * FROM users where username = '$username' AND password = '$password'") 
    or die("Failed to query database".mysql_error());
    $rows = mysqli_num_rows($result);
    if($rows==1){
        header("Location: index.html");
;
    }else{
        echo 'invalid username or password';
        header("Location: login.php");
    }
    $connect->close();
?>