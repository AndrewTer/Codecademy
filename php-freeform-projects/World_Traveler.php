<?php
  $riel = 2103942;
  $kyat = 19092;
  $krones = 109;
  $lek = 9094;

  echo "We have $riel riel, $kyat kyat, $krones krones, $lek lek";

  // exchange rate on 21 oct 2019
  $riel_exchange_rate = 0.00025;
  $kyat_exchange_rate = 0.00065;
  $krones_exchange_rate = 0.11;
  $lek_exchange_rate = 0.0090;

  $riel_to_usd = round($riel * $riel_exchange_rate, 2);
  $kyat_to_usd = round($kyat * $kyat_exchange_rate, 2);
  $krones_to_usd = round($krones * $krones_exchange_rate, 2);
  $lek_to_usd = round($lek * $lek_exchange_rate, 2);

  echo "\n\nThe amount of USD:\nriel = $riel_to_usd \nkyat = $kyat_to_usd \nkrones = $krones_to_usd \nlek = $lek_to_usd";
  echo "\nFinal amount: ".round($riel_to_usd + $kyat_to_usd + $krones_to_usd + $lek_to_usd - 1, 2);
  

?>
