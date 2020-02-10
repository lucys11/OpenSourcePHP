<?
  $mymarks["module1"] = 85;
  $mymarks["module2"] = 80;
  $mymarks["module3"] = 70;
  $mymarks["module1"] = 90;
  $mymarks["module2"] = 65;
  $mymarks["module3"] = 80;

  while(list($index,$value) = each($mymarks))
  {
    echo "for  $index  my marks were  $value <br/>";
  }
  $total = 0;
  $total = $total + $mymarks[$index];
  $average = $total /  6;
  echo "my average is $average";   

?>
