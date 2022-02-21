





<html>
<head>
  
<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Input Form</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>

  
    <h2>Book details</h2>

    <form action="setBa.php" method="POST"> File Name:

        <input type="text" name="fileName"> <br> 

        <input type="submit" value="Submit">

    </form>
    
      
  <?php
  
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  
  function dispfilesize($filesize)
{
 
if(is_numeric($filesize))
{
 $decr = 1024; $step = 0;
$prefix =
array('Byte','KB','MB','GB','TB','PB');
while(($filesize / $decr) > 0.9)
{ $filesize = $filesize / $decr;
$step++;
 }
 return round($filesize,2).' '.$prefix[$step];
}
 else
{
return 'NaN';
}
}
  
  
  $fileName=$_POST["fileName"];
  
  echo('<table border="1"> 
  <tr>
  <th rowspan="1">Item code</th>
	<th rowspan="1">Item name</th>
	<th rowspan="1">Unit sold</th>
	<th rowspan="1">Rate</th>
  </tr>');
  
  if ($file = fopen($fileName, "r")) {
    while(!feof($file)) {
        $line = fgets($file);
        
        $fileLine=explode(" ",$line);
        echo"<tr>";
        echo "<td>".$fileLine[0]."</td>";
        echo "<td>".$fileLine[1]."</td>";
        echo "<td>".$fileLine[2]."</td>";
        echo "<td>".$fileLine[3]."</td>";
        echo "</tr>";
        # do same stuff with the $line
    }
    fclose($file);
    
    echo("</table>");
}
  
}
?>
    
    
</body>
</html>