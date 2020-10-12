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
      Start typing a name in the input field below:
    </div>
    <div class="card-body">
      <form action="">
        <label for="fname">First name:</label>
        <input type="text" id="fname" name="fname" onkeyup="showHint(this.value)">
      </form>
      <p>Suggestions: <span id="txtHint"></span></p>
    </div>
  </div>
  <div class="card mt-5">
    <div class="card-header">
      AJAX Calculator
    </div>
    <div class="card-body">
      <label for="num1">First num:</label>
      <input type="number" id="num1" name="num1">
      <label for="num2">Second num:</label>
      <input type="number" id="num2" name="num2">
      <button class="btn btn-primary" onclick="calculate('add')">add</button>
      <button class="btn btn-danger" onclick="calculate('substract')">substract</button>
      <p>Result: <span id="result"></span></p>
    </div>
  </div>

  <div class="row">
    <a href="/tutorial/7.php" class="btn btn-secondary">Previous</a>
    <a href="/tutorial/9.php" class="btn btn-primary">Next - AJAX with XML</a>
  </div>

</body>
<footer>
  <script>
    function showHint(str) {
      if (str.length == 0) {
        // misal input box kosong, suggestion juga kosong
        document.getElementById("txtHint").innerHTML = "";
        return;
      } else {
        var xmlhttp = new XMLHttpRequest();
        // ngasih tau browser buat siap siap kalo ada state change, lakuin ini
        xmlhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            document.getElementById("txtHint").innerHTML = this.responseText;
          }
        };
        // deskripsiin ke mana ngirim requestnya
        xmlhttp.open("GET", "/server/gethint.php?q=" + str, true);
        // kirim xmlhttprequest
        xmlhttp.send();
      }
    }

    function calculate(operation) {
      let num1 = document.getElementById('num1').value == "" ? 0 : document.getElementById('num1').value
      let num2 = document.getElementById('num2').value == "" ? 0 : document.getElementById('num2').value
      console.log(num1)
      console.log(num2)
      console.log(operation)

      let xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function() {
        /**
         * readyState: 
         * 0 (uninitialized), 
         * 1 (open request), 
         * 2 (request sent), 
         * 3 (response received), 
         * 4 (finish loading)
         */
        /**
         * status 200 -> OK
         * status 300 -> redirect
         * status 400 -> no such page (client request error)
         * status 500 -> sorry, we fucked up
         */
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("result").innerHTML = this.responseText
        }
      }
      xmlhttp.open("GET", "/server/calculate.php?num1=" + num1 + "&num2=" + num2 + "&op=" + operation, true)
      xmlhttp.send();
    }
  </script>
</footer>

</html>