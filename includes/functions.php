<?php
function getPriceWithoutTVA(float $priceWithTVA): float {

    $priceWithoutTVA = $priceWithTVA - (20/100) * $priceWithTVA;
    return $priceWithoutTVA;

}

function findBeanieById(int $id, array $products): ?array {
    foreach ($products as $beanie) {
        if ($beanie['id'] == $id) {
            return $beanie;
        }
    }
}
?>