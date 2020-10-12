<?php

$raw_json = file_get_contents($_SERVER["DOCUMENT_ROOT"] . "/data/dota.json");
$data = json_decode($raw_json);

foreach ($data->heroes as $hero) {
  echo "<div class='card'>";
  echo "<div class='card-header'>$hero->name</div>";
  echo "<div class='card-body'>";
  echo "Gender : $hero->gender<br>";
  echo "Damage : $hero->damage<br>";
  echo "Range : $hero->range<br>";
  echo "</div>";
  echo "</div>";
}

// $ Todo : echo gametype dll juga