<?php
$prod_besteld = 9;
if($prod_besteld < 10){
     $prijs = 1.50; 
    echo number_format($prijs,2); 
} elseif ($prod_besteld < 20){
    echo $prijs = 1.25;
} else {
    echo $prijs = 1.00;
}
echo "<br>";
$prod_besteld = 12;
if($prod_besteld < 10){
    echo $prijs = 1.50; 
} elseif ($prod_besteld < 20){
    echo $prijs = 1.25;
} else {
    echo $prijs = 1.00;
}
echo "<br>";
$prod_besteld = 20;
if($prod_besteld < 10){
    echo $prijs = 1.50; 
} elseif ($prod_besteld < 20){
    echo $prijs = 1.25;
} else {
     $prijs = 1;
    echo number_format($prijs,2);
}
?>
