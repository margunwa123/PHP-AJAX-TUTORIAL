<?php

// dipake di 8.php
$num1 = $_REQUEST["num1"];
$num2 = $_REQUEST["num2"];
$op = $_REQUEST["op"];

if ($op == "add") echo $num1 + $num2;
if ($op == "substract") echo $num1 - $num2;
