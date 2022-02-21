

<html>
<head>
  
<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Input Form</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>

  
    <h2>Approve Committee</h2>

    <form action="setAb.php" method="POST"> Enter Event title:

        <input type="text" name="title"> <br> 

        <input type="submit" value="Submit">

    </form>
  
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

$title=$_POST['title'];
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
 $sql =" UPDATE committee set status = 'Approved' where cno in 
 (SELECT cno FROM comm_event where eno in
 (SELECT eno FROM Event where title='$title'))
";
 $ret = pg_query($db, $sql);
 if(!$ret) {
 echo pg_last_error($db);
 exit;
 } else {
 echo "<br>"."Record updated successfully\n";
 }
 
 $sql ="SELECT * from Committee;";
 $ret = pg_query($db, $sql);
 if(!$ret) {
 echo pg_last_error($db);
 exit;
 } 
 
 echo('<table border="1"> 
  <tr>
  <th rowspan="1">CNO</th>
	<th rowspan="1">NAME</th>
	<th rowspan="1">HEAD</th>
	<th rowspan="1">FROM</th>
	<th rowspan="1">TO</th>
	<th rowspan="1">STATUS</th>
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