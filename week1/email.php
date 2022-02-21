





<html>
<head>
  
<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Input Form</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>

  
    <h2>Input String Form</h2>

    <form action="email.php" method="POST"> Email:

        <input type="text" name="email"> 

        <input type="hidden" name="form_submitted" value="1" />

        <input type="submit" value="Submit">

    </form>
    
      
  <?php
  
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $email=$_POST["email"];
  function isValidEmail($email)
{
    return preg_match('/\A[a-z0-9]+([-._][a-z0-9]+)*@([a-z0-9]+(-[a-z0-9]+)*\.)+[a-z]{2,4}\z/', $email)
        && preg_match('/^(?=.{1,64}@.{4,64}$)(?=.{6,100}$).*/', $email);
}
if (isValidEmail($email)) {
 echo $email . " is a valid email. We can accept it.";
} else { 
 echo $email . " is an invalid email. Please try again.";
}

  
}
?>
    
    
</body>
</html>