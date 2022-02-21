

<html>
<head>
  
<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Input Form</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>

  
    <h2>Competition Details</h2>

    <form action="setBb.php" method="POST"> Enter Competition name:

        <input type="text" name="cname"> <br> 

        <input type="submit" value="Submit">

    </form>
  
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

$cName=$_POST['cname'];
 $host = "host=127.0.0.1";
 $port = "port=5432";
 $dbname = "dbname = ty";
 $credentials = "user = shreyas password=hack";
 $db = pg_connect( "$host $port $dbname $credentials" );
 if(!$db) {
 echo "Error : Unable to open database\n";
 } else {
 echo "Opened database successfully\n";
 }
 
 $sql ="
 select Student.sid,Student.name,Student.class, Competition.c_name,stu_comp.rank,stu_comp.year
 from Student,Competition,stu_comp where Student.sid=stu_comp.sid and 
 Competition.c_no=stu_comp.c_no and Competition.c_name='$cName' 
 and stu_comp.rank=1;
 ";
 $ret = pg_query($db, $sql);
 if(!$ret) {
 echo pg_last_error($db);
 exit;
 } 
 
 echo('<table border="1"> 
  <tr>
  <th rowspan="1">SID</th>
	<th rowspan="1">NAME</th>
	<th rowspan="1">CLASS</th>
	<th rowspan="1">Competition</th>
	<th rowspan="1">Rank</th>
	<th rowspan="1">Year</th>
  </tr>');
  
while($row = pg_fetch_row($ret)) {
   
   echo"<tr>";
        echo "<td>".$row[0]."</td>";
        echo "<td>".$row[1]."</td>";
        echo "<td>".$row[2]."</td>";
        echo "<td>".$row[3]."</td>";
        echo "<td>".$row[4]."</td>";
        echo "<td>".$row[5]."</td>";
        echo "</tr>";
 }
    
    echo("</table>");
 
 

 echo "Operation done successfully\n";
 pg_close($db);
}
?>

</body>
</html>