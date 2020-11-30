<?php
$test1= 3;
$test2= 6;
$test3 = 3;
if($test1 == $test2){
    echo "<br>";
    echo "gelijk";
} else{
    echo "niet gelijk";
}
if($test1 != $test2){
    echo "<br>";
    echo "ongelijk";
}
if($test1===$test3){
    echo "<br>";
    echo "identiek";
}
if ($test1>$test2){
    echo "<br>";
    echo "test1 is groter dan test2" ;
}  else {
    echo "<br>";
    echo "test1 is niet groter dan test2";
}
if ($test1<$test2){
    echo "<br>";
    echo "test1 is kleiner dan test2";
}
if ($test1>=$test2){
    echo "<br>";
    echo "test1 is groter of gelijk aan test2";
}else {
    echo "<br>";
    echo "test1 is niet groter of gelijk aan test2";
}
if($test1<=$test2){
    echo "<br>";
    echo "test1 is kleiner of gelijk aan test2";
}
?>
