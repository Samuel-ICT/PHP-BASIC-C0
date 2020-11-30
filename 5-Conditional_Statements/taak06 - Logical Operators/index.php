<?php
$var1 = 4; 
if($var1 < 10 && $var1 < 5) {
    echo "beide waardes zijn waar";
} else {
    echo "beide waardes zijn niet waar";
}
echo "<br>";
if($var1 < 5 || $var1 > 3){
    echo "een of beide waardes zijn waar";
} else {
    echo "geen van beide waardes is waar";
}
echo "<br>";
if($var1 > 0 xor $var1 > 10){
    echo "een van de twee waardes waar is maar niet beide";
} else {
    echo "beide waardes zijn waar";
}
echo "<br>";
if($var1 !== 3){
    echo "de vergelijking is niet waar";
} else {
    echo "de vergelijking is waar";
}
?>