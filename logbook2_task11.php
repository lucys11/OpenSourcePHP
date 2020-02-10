<?
  $mymarks["module1"] = 85;
  $mymarks["module2"] = 80;
  $mymarks["module3"] = 70;
  $mymarks["module4"] = 90;
  $mymarks["module5"] = 65;
  $mymarks["module6"] = 80;

  while(list($index,$value) = each($mymarks))
  {
    echo "for  $index  my marks were  $value <br/>";
  }
  $total = 0;
  $total = $total + $mymarks[$index];
  $average = $total /  6;
  echo "my average is $average";

?>
