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
  // $ FUNCTION
  function echoVideo($param)
  {
    echo "<div>" . $param . "<a href=\"https://www.youtube.com/watch?v=dQw4w9WgXcQ&ab_channel=RickAstleyVEVO\" target=\"_blank\">This is a cat video</a> </div>";
  }
  // echoVideo("Watch this youtube video : ");








  // default param
  function add12($num = 1)
  {
    echo strval(12 + $num) . '<br>';
  }
  // tebak hasil kedua pemanggilan dibawah ini
  // add12();
  // add12(15);











  // php scope
  $car = "ford";

  function changeCar()
  {
    $car = "limosin";
  }
  // changeCar()

  function correctChangeCar()
  {
    global $car;
    $car = "limosin";
  }
  // correctChangeCar()












  ?>
  <h2>Buat modul ini, liat file 3.php</h2>
  <h1>Car : <?php
            echo $car
            ?></h1>
  <a class="btn btn-secondary" href="/tutorial/2.php">Previous</a>
  <a class="btn btn-primary" href="/tutorial/4.php">Next - OOP</a>
</body>

</html>