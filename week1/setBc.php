<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Student's Message</title>
</head>

<body>
  <form method="post" >
    ENTER NAME <input type="text" name="snm"><br><br>
    COLLEGE NAME <input type="text" name="clnm"><br><br>
    ENTER MESSAGE <input type="text" name="msg"><br> <br>
    <input type="submit" value="submit">
    <input type="reset" value="reset">
  </form>

  <?php
  
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $snm = $_POST["snm"];
    $msg = $_POST["msg"];
    $clnm = $_POST["clnm"];
    
    function isNullOrEmpty($str){
    return ($str === null || trim($str) === '');
}
    
   if(!isNullOrEmpty($snm) && !isNullOrEmpty($clnm) && !isNullOrEmpty($msg))
{

    function message($snm, $clnm, $msg)
    {
      return "$snm have sent message from college $clnm as $msg";
    }
    echo "<br>";
    echo message($snm, $clnm, $msg);
    echo "<br>";
   
   } else {
     if(isNullOrEmpty($snm)){
       echo "Student name missing";
       echo "<br>";
     }
    if(isNullOrEmpty($clnm)){
       echo "College name missing";
       echo "<br>";
     }
    if(isNullOrEmpty($msg)){
       echo "Message missing";
       echo "<br>";
     }
    
    
    
   }

  
}
  ?>
  

</body>

</html>