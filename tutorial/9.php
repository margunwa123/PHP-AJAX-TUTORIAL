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
    <div class="card-header bg-primary text-white">
      Get a CD!
    </div>
    <div class="card-body">
      <select onchange="getCD()" name="cd_artist" id="cd_artist" class="form-control">
        <option value="">Select an artist</option>
        <option value="Daler Mehndi">Daler Mehndi</option>
        <option value="Arung Agamani">Arung Agamani</option>
        <option value="Lil Pump">Lil Pump</option>
      </select>
      <p>Info:</p>
      <div id="info"></div>
    </div>
  </div>

  <div class="card mt-5">
    <div class="card-header bg-primary text-white">
      Get a CD (type the artist yourself)
    </div>
    <div class="card-body">
      <input type="text" onkeyup="searchCD(this.value)" class="form-control">
      <span class="small font-italic">type all to get all the cds</span>
      <p>Info:</p>
      <div id="search-info"></div>
    </div>
  </div>
  <div class="row">
    <a href="/tutorial/8.php" class="btn btn-secondary">Previous</a>
    <a href="/tutorial/xml.php" class="btn btn-warning">More : Understanding XML</a>
    <a href="/tutorial/10.php" class="btn btn-primary">Next - JSON with AJAX</a>
  </div>
</body>
<footer>
  <script>
    function getCD() {
      let cd_artist = document.getElementById("cd_artist").value;
      let xml = new XMLHttpRequest();
      xml.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("info").innerHTML = this.responseText
        }
      }
      xml.open('GET', '/server/cd.php?cd=' + cd_artist);
      xml.send();
    }

    function searchCD(text) {
      let xml = new XMLHttpRequest();
      xml.onreadystatechange = function() {
        if (this.status == 200 && this.readyState == 4) {
          document.getElementById("search-info").innerHTML = this.responseText
        }
      }
      xml.open('GET', '/server/searchcd.php?text=' + text);
      xml.send();
    }
  </script>
</footer>

</html>