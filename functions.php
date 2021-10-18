<?php
function getPriceWithoutTVA(float $priceWithTVA): float {

    $priceWithoutTVA = $priceWithTVA - (20/100) * $priceWithTVA;
    return $priceWithoutTVA;

}
?>