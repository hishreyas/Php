





<html>
<head>
  
<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Input Form</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>

  
    <h2>Enter marks of student</h2>

    <form action="grade.php" method="POST"> Maths:

        <input type="number" name="maths"> <br> English:

        <input type="number" name="english"> 
        <br> Marathi:

        <input type="number" name="marathi"> 
        <br> Hindi:

        <input type="number" name="hindi"> 
        
        <br> History:

        <input type="number" name="history"> 

        <input type="hidden" name="form_submitted" value="1" />

        <input type="submit" value="Submit">

    </form>
    
      
  <?php
  
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  
  $maths=$_POST["maths"];
  $english=$_POST["english"];
  $marathi=$_POST["marathi"];
  $hindi=$_POST["hindi"];
  $history=$_POST["history"];
  $total=$marathi+$english+$marathi+$hindi+$history;
  $percent=$total/5;
  function getgrade($percent){
    if($percent<40)
    return "F";
    else if($percent<60)
    return "B";
    else if($percent<75)
    return "A";
    else 
    return "O";
  }
  $grade=getgrade($percent);
  
  echo('<table border="1"> 
  <tr>
  <th rowspan="1">Total</th>
	<th rowspan="1">Percent</th>
	<th rowspan="1">Grade</th>
  </tr>');
		  
		echo("<tr>
			<td>$total</td>
			<td>$percent</td>
			<td>$grade</td>
		  </tr>");
		echo("</table>");
  
}
  ?>
    
    
</body>
</html>