<?php
$amount = 2500.78;
$vat = 15;

 

echo round($amount * (($vat / 100) + 1), 2);
?>