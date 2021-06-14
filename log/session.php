<?php
session_start();
$server = "localhost";
$user = "root";
$pass = "";
$database = "shopping";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

$email = $_POST['email'];
$password = md5($_POST['password']);


$check_user = mysqli_query($conn, "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'");


if (mysqli_num_rows($check_user) > 0) {

    $user = mysqli_fetch_assoc($check_user);
    $_SESSION['user'] = [
        "id" => $user['id'],
        "username" => $user['username']
    ];

    header("Location: /CodingLab/index.php");

  } else {

      $_SESSION['message'] = 'Не верный логин или пароль';
      header('Location: /CodingLab/log/index.php');
  }
  ?>
