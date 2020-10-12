<?php

/**
 * perbedaan cookies & session : cookies disimpen di browser masing masing, session disimpen di server
 */
$post_name = $_POST['name'];
$post_password = $_POST['password'];
$get_name = $_GET['name'];
$get_password = $_GET['password'];

session_start();

if (!is_null($get_name) && !is_null($get_password)) {
  setcookie('name', $get_name, time() + 10);
  setcookie('password', $get_password, time() + 10);
}

if (!is_null($post_name) && !is_null($post_password)) {
  $_SESSION['name'] = $post_name;
  $_SESSION['password'] = $post_password;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../bootstrap.css">
  <title>Document</title>
</head>

<body class="d-flex flex-column align-items-center">
  <div class="container">
    <a class="btn btn-secondary" href="/tutorial/6.php">Previous</a>
    <a class="btn btn-primary" href="/tutorial/8.php">Next - AJAX</a>
    <div class="card">
      <div class="card-header bg-primary text-white">
        Post Request + set session
      </div>
      <!--
        ---- POST REQUEST
      -->
      <div class="card-body">
        <form action="/tutorial/7.php" method="post">
          <?php
          if (!is_null($post_name)) echo ("The name is $post_name <br>");
          if (!is_null($post_password)) echo ("The password is $post_password");
          ?>
          <p>Nama: </p>
          <input type="text" name="name" class="form-control">
          <p>Password </p>
          <input type="password" name="password" class="form-control">
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
    <div class="card mt-5">
      <!--
        ---- GET REQUEST
      -->
      <div class="card-header bg-primary text-white ">
        Get Request + set cookie
      </div>
      <div class="card-body">
        <form action="/tutorial/7.php" method="get">
          <?php
          if (!is_null($get_name)) echo ("The name is $get_name <br>");
          if (!is_null($get_password)) echo ("The password is $get_password");
          ?>
          <p>Nama: </p>
          <input type="text" name="name" class="form-control">
          <p>Password </p>
          <input type="password" name="password" class="form-control">
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
    <div class="card mt-5">
      <!--
        ---- COOKIE
      -->
      <div class="card-header bg-primary text-white">
        COOKIE
      </div>
      <div class="card-body">
        <?php
        $cookie_name = $_COOKIE['name'];
        $cookie_password = $_COOKIE['password'];
        ?>
        <p>Nama: <?php
                  echo $cookie_name
                  ?>
        </p>
        <div class="border-dark">
          <p>Password : <?php
                        echo $cookie_password
                        ?>
          </p>
        </div>
      </div>
    </div>
    <div class="card mt-5">
      <!--
        ---- SESSION
      -->
      <div class="card-header bg-primary text-white">
        SESSION
      </div>
      <div class="card-body">
        <?php
        $session_name = $_SESSION['name'];
        $session_password = $_SESSION['password'];
        ?>
        <p>Nama: <?php
                  echo $session_name
                  ?>
        </p>
        <div class="border-dark">
          <p>Password : <?php
                        echo $session_password
                        ?>
          </p>
        </div>
      </div>
    </div>
  </div>
</body>

</html>