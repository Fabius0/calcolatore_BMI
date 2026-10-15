<?php
$nome=_POST['nome'];
$peso=_POST['peso'];
$altezza=_POST['altezza'];

$bmi=$peso/pow(($altezza/100),2);
if ($bmi < 18.5){

}
if ($bmi > 18.5 && $bmi < 24.9){

}
if ($bmi > 25 && $bmi < 29.9){

}
if ($bmi > 30){

}

?>