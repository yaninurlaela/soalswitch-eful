<?php
$tahun = 2000;

if($tahun % 400 == 0){
    echo "tahun kabisat";
}elseif($tahun % 100 == 0){
    echo "bukan tahun kabisat";
}elseif($tahun % 4 == 0){
    echo "tahun kabisat";
}else{
    echo "bukan tahun kabisat";
}
?>