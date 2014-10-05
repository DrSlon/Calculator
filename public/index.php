<?php

require_once '../library/Calculator.php';

$calculator = new Calculator();
echo "2 + 3 = ".$calculator->plus(2, 3);
