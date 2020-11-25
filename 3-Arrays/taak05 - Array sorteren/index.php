<?php
$getallen = [676,5345,78657,3,46,21,47];
$laag_hoog= $getallen;
asort($laag_hoog);
print_r($laag_hoog); 
echo "<br>";
$hoog_laag = $getallen;
arsort($hoog_laag);
print_r($hoog_laag);
?>