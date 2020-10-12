<?php

$text = $_GET["text"];
// dapetin semua cdnya
$cds = simplexml_load_file($_SERVER['DOCUMENT_ROOT'] . '/server/cd.xml')->CD;

// setelah dapet semua, cari apakah text ada didalam cd's artist
if ($text != "" && $text != "all") {
  foreach ($cds as $cd) {
    // bikin regex dari teks
    $regex = "/$text/i";
    // regex dicocokin sama cd->ARTIST, misal cocok maka...
    if (preg_match($regex, $cd->ARTIST)) {
      echo ("<b>Artist</b> : $cd->ARTIST<br>");
      echo ("-> Song : $cd->SONG<br>");
    };
  }
} else if ($text == "all") {
  foreach ($cds as $cd) {
    echo ("<b>Artist</b> : $cd->ARTIST<br>");
    echo ("-> Song : $cd->SONG<br>");
  }
}
