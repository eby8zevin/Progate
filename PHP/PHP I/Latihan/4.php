//index.php
<?php
$money = 20;
$price = 10;
$taxRate = 0.08;
echo 'Nilai $money: '.$money;
echo '<br>';
echo 'Nilai $price: '.$price;
echo '<br>';
echo 'Nilai $taxRate: '.$taxRate;
echo '<br>';
echo '-----';
echo '<br>';

// Ketik code Anda dibawah
$taxIncludedPrice = $price + $price * $taxRate;
if ($money > $taxIncludedPrice) {
  echo 'Anda dapat membeli item ini';
} elseif ($money == $taxIncludedPrice) {
  echo 'Anda dapat membeli item ini, tetapi uang Anda akan habis';
} else {
  echo 'Anda tidak dapat membeli item ini';
}

?>
