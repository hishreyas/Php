





<html>
<head>
  
<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Input Form</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>

  
    <h2>Input String Form</h2>

    <form action="string.php" method="POST"> First String:

        <input type="text" name="stringOne"> <br> Second String:

        <input type="text" name="stringTwo"> 
         <br> Postion:
         <input type="number" name="positionNum"> 
          <br> Number of characters:
            <input type="number" name="numChar"> 

        <input type="hidden" name="form_submitted" value="1" />

        <input type="submit" value="Submit">

    </form>
    
      
  <?php
  
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  
  function stringInsert($str,$insertstr,$pos)
{
    $str = substr($str, 0, $pos) . $insertstr . substr($str, $pos);
    return $str;
}  
  
  
  
  $fstring=$_POST["stringOne"];
  $sstring=$_POST["stringTwo"];
  $postion=$_POST["positionNum"];
  $numChar=$_POST["numChar"];
  $pos=strpos($fstring,$sstring);
  
  echo "<h1>".str_replace(substr($fstring, $postion, $numChar), '', $fstring)."</h1"."<br/>";
  
  echo "<h1>".stringInsert($fstring,$sstring,$postion)."</h1"."<br/>";
  echo "<h1>".str_replace(substr($fstring, $postion, $numChar), $sstring, $fstring)."</h1"."<br/>";
  echo "<h1>".str_replace($sstring,$sstring, $fstring)."</h1"."<br/>";
  
  
}
?>
    
    
</body>
</html>