<html>
  <head><title>Select colour page</title></head>
    <body>
      <? session_start(); ?>
      <? $_SESSION['widgetsize'] = $_POST["selsize"]; ?>
      <form action="confirmation.php"  method="post">
	Select the colour for the <?php echo $_POST["selsize"] ?> widgets you are ordering
   	<select name="selcolour">
   	  <option>white</option>
	  <option>red</option>
	  <option>yellow</option>
	  <option>green</option>
	  <option>blue</option>
        </select>
        <br/><br/>
        <input type="submit" value="Buy"/>
      </form>
   </body>
</html>
