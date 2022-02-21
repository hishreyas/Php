
<!DOCTYPE html>
<html>
  <head>
   <title>String Compare</title> 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
<h1>String Comaparision</h1>

<form method="post">
<label>Enter Small String:</label>
<input type="text" name="str1">
<br><br>
<label>Enter Large String:</label>
<input type="text" name="str2">
<br><br>
<label>No of characters to compare:</label>
<input type="number" name="num">
<br><br>
<button type="submit" value="Submit" name="submit">Submit</button>
&emsp;
<button type="reset" value="Reset" name="reset">Reset</button>
<br><br>
</form>

</body>
</html>

<?php 

if ($_SERVER['REQUEST_METHOD'] === 'POST'){

$str1 = $_POST['str1'];
$str2 = $_POST['str2'];
$num = $_POST['num'];

echo "Small string is: $str1<br>";
echo "Large string is: $str2<br>";

$len = strlen($str1);

$val = strcmp(substr($str1, 0, $len), substr($str2, 0, $len));
if($val == 0){
echo "Small string appears at the start of Large String.<br>";
}
else{
echo "Small string does NOT appear at the start of Large String.<br>";
}

$val = strpos($str2, $str1);
if($val === false){
echo "Small string is NOT in Large string.<br>";
}
else{
echo "Small string found at position $val in Large string.<br>";
}

$val = strcasecmp(substr($str1, 0, $num), substr($str2, 0, $num));
if($val == 0){
echo "Both strings are same for first $num characters.<br>";
}
else{
echo "Both strings are NOT same for first $num characters.<br>";
}
}
?>
