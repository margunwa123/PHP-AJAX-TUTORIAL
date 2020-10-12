<?php
//Understanding XML
$simplexml = simplexml_load_file($_SERVER['DOCUMENT_ROOT'] . "/server/test.xml");
$data = $simplexml->PERSON->NAME;
$persons = $simplexml->PERSON;

// OUTPUT dari query ini bakal apa?
// foreach ($persons as $person) {
//   echo "$person->NAME <br>";
// }

// kalo yg ini?
// foreach ($persons as $person) {
//   if ($person->CLASS == "K2")
//     echo "$person->NAME <br>";
// }
