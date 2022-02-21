
<html>
<head>
  
<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Input Form</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>

  
    <h2>File Content and size</h2>

    <form action="setAa.php" method="POST"> File Name:

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
  $myfile = fopen($fileName, "r") or die("Unable to open file!");


  echo "<h1>"."File Content : </h1>".fread($myfile,filesize($fileName))."<br/>";
  echo "<h1>"."File Size:  </h1> ".dispfilesize(filesize($fileName))."<br/>";
  fclose($myfile);
  
  
}
?>
    
    
</body>
</html>