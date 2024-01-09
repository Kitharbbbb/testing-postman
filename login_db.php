<?php

session_start();

if (isset($_POST['username'])) {

    include('server1.php');

    $username = $_POST['username'];
    $password = $_POST['password'];
    $passworduse = ($password);

    $query = "SELECT * FROM customers WHERE username = '$username' AND password = '$passworduse'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);

        $_SESSION['userid'] = $row['id'];
        $_SESSION['users'] = $row['fname'] . " " . $row['lname'];

        if(mysqli_num_rows($result) == 1){
            $_SESSION['username']= $username;
            $_SESSION['success'] = "Your are now logged in";
            header("location: /user/home.php");
        }else{
            array_push($errors, "Wrong username/password combination");
            $_SESSION['error'] = "Wrong username/password try again";
            header("location: /login/login.php");
        }
    } else {
    
        $_SESSION['error'] = "Wrong username/password try again";
        header("location: /login/login.php");
    }
}