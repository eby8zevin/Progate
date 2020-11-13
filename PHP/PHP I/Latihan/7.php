//index.php
<?php
$prices = array(10, 6, 7, 8);
echo 'Nilai $prices: ';
foreach ($prices as $price) {
  echo $price.' ';
}
echo '<br>';
echo '-----';
echo '<br>';

// Ketik code Anda dibawh
$totalPrice = 0;
$maxPrice = 0; // Variable untuk harga termahal
foreach ($prices as $price) {
  $totalPrice += $price;
  // Ketika lebih besar dari nilai yang disimpan didalam $maxPrice
  if ($price > $maxPrice) {
    // Perbarui $maxPrice dengan nilai yang lebih tinggi
    $maxPrice = $price;
  }
}
echo 'Harga total adalah $'.$totalPrice;
echo '<br>';
echo 'Harga termahal adalah $'.$maxPrice;
?>
