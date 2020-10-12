<?php
$cd_artist = $_GET["cd"];

$xmlDoc = simplexml_load_file($_SERVER['DOCUMENT_ROOT'] . '/server/cd.xml');

$cds = $xmlDoc->CD;
echo "Karya artist $cd_artist <br>";
foreach ($cds as $cd) {
  if ($cd->ARTIST == $cd_artist) {
    echo "<b>Nama CD : $cd->TITLE</b> <br> 
    <ol>
      <li>
        Nama lagu : $cd->SONG <br>
      </li>
    </ol>";
  }
}
/**
 * TODO:
 * -- buat dokumen cd.xml jadi setiap CD ada banyak lagu dan tampilkan lagu dari suatu CD satu per satu
 */
