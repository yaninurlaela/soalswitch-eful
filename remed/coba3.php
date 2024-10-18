<?php
$nilai = 75 ;
switch(true){
    case ($nilai >= 90 && $nilai <= 100):
        echo "A";
        break;
    case ($nilai >= 80 && $nilai <= 89):
        echo "B";
        break;
    case ($nilai >= 70 && $nilai <= 79):
        echo "C";
        break;
    case ($nilai >= 60 && $nilai <= 69):
        echo "D";
        break;
    default:
    echo "E";
    break;
}
?>