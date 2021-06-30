<?php
$numero = $_GET["numero"];

if($numero > 0){
    echo "o $numero positivo";
}
elseif ($numero < 0){
    echo "o $numero negativo";
}
if($numero % 2 ==0){
    echo "o $numero é par";
}
else {
    echo "o $numero é impar";
}
?>

