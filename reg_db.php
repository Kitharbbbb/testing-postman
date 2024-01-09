<?php

session_start();

require_once "server1.php";
if (isset($_POST['reg_user'])) {

  $username = $_POST['username'];
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $gender = $_POST['gender'];
  $birthday = $_POST['birthday'];
  $tel = $_POST['tel'];
  $email = $_POST['email'];
  $address = $_POST['address'];
  $password = $_POST['password'];


  $check = "SELECT * FROM customers WHERE username = '$username' LIMIT 1";
  $result = mysqli_query($conn, $check);
  $customers = mysqli_fetch_assoc($result);


  if ($customers['username'] === $username) {
    echo "<script>alert('Username already exists');</script>";
  } else {
    $passworduse = ($password);

    $query = "INSERT INTO customers (username,  fname, lname, birthday,
    email, tel, gender, address, password )
    VALUE ('$username',  '$fname', '$lname', '$birthday',
     '$email', '$tel', '$gender', '$address','$passworduse')";
    $result = mysqli_query($conn, $query);

    if ($result) {
      $_SESSION['success'] = " Insert user successfully";
      header("Location: login.php");
    } else {
      $_SESSION['error'] = " Something went wrong";
      header("Location: error.php");
    }
  }
}

?>