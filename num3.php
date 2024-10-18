<?php
$musim = 4 ;
switch (true){
    case($musim >= 1 && $musim <= 3):
        echo "musim dingin";
        break;
    case($musim >= 4 && $musim <= 6):
        echo "musim semi";
        break;
    case($musim >= 7 && $musim <= 9):
        echo "musim panas";
        break;
    case($musim >= 10 && $musim <=12):
        echo "musim gugur";
        break;
    default:
    echo "tidak ada musim";
    break;
}

?>