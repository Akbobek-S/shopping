<?php
session_start();
if (isset($_SESSION['user'])) {
  $name = $_SESSION['user']['username'];
}
  else {
    header('Location: /CodingLab/log/index.php');
  }
   ?>
<!DOCTYPE html>
<php lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />


  <link rel="stylesheet" href="./styles.css" />
  <title>Shopping Crash</title>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/scrollreveal"></script>
  <script>

    $(document).ready(function(){

      $('#hide').click(function(){

        $('#hh1').hide(1000);
      });


    });
  </script>

  <?php
    require_once ('database/DB.php');
    require ('functions.php');
  ?>
</head>

<body>
