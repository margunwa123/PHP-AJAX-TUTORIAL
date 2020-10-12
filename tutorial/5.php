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
  // $ RESOURCES
  // -- variabel spesial yang memiliki penanganan untuk koneksi, file, database, dll

  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "test";
  try {
    // asumsi database test udah ada
    $conn =  new mysqli($servername, $username, $password, $database);
    /**
     misal database belum ada, jalanin query ini:
     $conn = new mysqli($servername, $username, $password)
     isCreated = $conn->query("CREATE DATABASE $database");
     echo isCreated ? "db created successfully" : "db not created (already there or error occured)"
     */
    $sql = "INSERT INTO MyGuests (firstname, lastname, email)
            VALUES ('John', 'Doe', 'john@example.com')";
    $conn->query($sql);
    $res = $conn->query("SELECT id, firstname, lastname FROM MyGuests");
    while ($row = $res->fetch_assoc()) {
      echo "id: " . $row["id"] . " - Name: " . $row["firstname"] . " " . $row["lastname"] . "<br>";
    }
  } catch (PDOException $e) {
    echo $e->getMessage();
  }
  ?>
  <a class="btn btn-secondary" href="/tutorial/4.php">Previous</a>
  <a class="btn btn-primary" href="/tutorial/6.php">Next - Type Juggling</a>
</body>

</html>