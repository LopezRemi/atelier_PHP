
<?php

echo("coucou");

?>

<h3>Exemple d'usage des boucles et des tableaux</h3>

<?php


$priceList= [15.60, 8.35, 124.99, 500, 59.99];

function taxedPrice( float $price): float {
    return $price * 1.2;
}
    foreach($priceList as $index => $price){
        echo "<p>position $index : " . taxedPrice($price) . " TTC</p>";
            
    }




?>