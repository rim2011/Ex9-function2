<?php
function produit(...$numbers){
    $prod=1;
   foreach($numbers as $n) {
       if ($n <> 0) {
           $prod *= $n;
       }
   }
   return "le produit est: ".$prod;
}

echo produit(1,3,5);