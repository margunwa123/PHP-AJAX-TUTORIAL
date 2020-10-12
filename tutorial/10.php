<!-- disclaimer : ini copas dr w3school -->
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../bootstrap.css">
  <title>Document</title>
</head>

<body class="container">
  <div class="card">
    <div class="card-header">
      Ini fetch pake JSON
    </div>
    <div class="card-body">
      <div id="dota"></div>
    </div>
  </div>
</body>
<footer>
  <script>
    function getDotaData() {
      let xml = new XMLHttpRequest();
      xml.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("dota").innerHTML = this.responseText
        }
      }
      xml.open('GET', '/server/dota.php');
      xml.send();
    }
    getDotaData();
  </script>
</footer>

</html>