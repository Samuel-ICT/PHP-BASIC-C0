<?php
function geefTienProcent(){
    $koopPrijs = 75;
    $korting = 10;
    $eindprijs = ($koopPrijs / 100) * $korting;
    $totaal = $koopPrijs - $eindprijs; 
    return number_format($totaal,2);
}
echo geefTienProcent();
?>