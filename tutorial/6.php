<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../bootstrap.css">
  <title>Document</title>
</head>

<body class="d-flex flex-column align-items-center">
  <?php
  // $ TYPE JUGGLING
  // -- tipe variabel di php bisa berubah berubah

  $foo = "0"; // dia string
  // $foo += 3; // jadi integer
  // $foo += 1.2; // jadi float
  // $foo += "10 asdsadas"; // jadi float (14.2)
  // $foo += "10 Big Piggies"; // jadi float (24.2)
  print("i have a $foo");
  ?>
  <a class="btn btn-secondary" href="/tutorial/5.php">Previous</a>
  <a class="btn btn-primary" href="/tutorial/7.php">Next - HTTP handling, Cookies, Session</a>
</body>

</html>