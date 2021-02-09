<?php

$ladoa = $_POST["ladoa"];

$ladob = $_POST["ladob"];

$hipotenusa = pow($ladoa, 2) + pow($ladob, 2);

$hipotenusa = sqrt($hipotenusa);

echo $hipotenusa;

?>