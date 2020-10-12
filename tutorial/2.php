<?php
/*
 $ ARRAY
*/
// normal
$nums = [1, 2, 3];
$strinks = ["hehe", "haha"];
// associative
$assArray = [
  'hehe' => 1,
  'haha' => 2
];
// multidimentional
$multidimentional = [
  'provinsi' => ['jawa barat', 'jakarta'],
  'kota' => array('bogor', 'tangerang', 'bandung', 'surabaya')
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../bootstrap.css">
  <title>Document</title>
</head>

<body>
  <div class="d-flex flex-column align-items-center">

    <?php
    echo ('<p>ganti hehe jadi provinsi pertama di array multidimentional</p>');
    echo ("<h1>hehe</h1><br>");
    echo ('<p>ganti haha jadi kota ketiga</p>');
    echo ("<h1>haha</h1><br>");
    ?>
    <div class="">
      <a class="btn btn-secondary" href="/tutorial/1.php">Previous</a>
      <a class="btn btn-primary" href="/tutorial/3.php">Next - function</a>
    </div>
  </div>
</body>

</html>