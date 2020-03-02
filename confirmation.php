<?php
session_start();
   echo "<h2> Your order qty is  $_SESSION[quantity] </h2></br>";
   echo "<h2> and the selected colour is $_POST[selcolour].</h2></br>";

  switch ($_SESSION['widgetsize']) {
  case "Small":
    $price = 15.75;
    break;
  case "Medium":
    $price = 16.75;
    break;
  case "Large":
    $price = 17.75;
    break;
  case "Extra Large":
    $prie = 18.75;
    break;
}

$total = $_SESSION['quantity'] * $price;

echo "<h2> The total price is " . $total;
?>
