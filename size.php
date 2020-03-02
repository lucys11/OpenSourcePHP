<html>
 <head>
  <title>Shopping Page</title>
 </head>
 <body>
   <? session_start(); ?>
   <? echo "Your amount is " . $_POST["selqty"] . " widgets";?>
   <? $_SESSION['quantity'] = $_POST["selqty"]; ?>
  <form  action="selectcolour.php" method="post">
   Select size of widgets
   <select name="selsize">
		<option>Small</option>
		<option>Medium</option>
		<option>Large</option>
		<option>Extra Large</option>
   </select>
   <br/><br/>
   <input type="submit" value="Buy"/>
  </form>
 </body>
</html>
