
<html>
  <head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body bgcolor="blanchedalmond">

<form method="post">
<input type='radio' name='op' value='1'>Insert an elemtnt in stack.<br>
<input type='radio' name='op' value='2'>Delete an element from stack.<br>
<input type='radio' name='op' value='3'>Display the contents of stack<br>
<input type='radio' name='op' value='4'>Insert an elemtnt in queue.<br>
<input type='radio' name='op' value='5'>Delete an element from queue.<br>
<input type='radio' name='op' value='6'>Display the contents of queue<br>
<input type='submit' name='submit' value='submit'>
</form>

<?php
   if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $a=$_POST['op'];
    $b=array(1,2,3,4,5,6,7,8,9);

    switch($a)
    {
    case 1:
        print_r($b);
        array_push($b,10);
        echo"<br>";
        echo"After insert an element in stack:<br>";
        print_r($b);break;

    case 2:
        print_r($b);
        array_pop($b);
        echo"<br>"; 
        echo"After delete an element from stack :<br>";
        print_r($b);break;

    case 3:
        echo "Contents of stack.<br>";
        print_r($b);break;

    case 4:
        print_r($b);
        array_unshift($b,45);
        echo"<br>";
        echo"After insert an element in queue:<br>";
        print_r($b);break;

    case 5:
        print_r($b);
        array_shift($b);
        echo"<br>";
        echo"After delete an element in queue:<br>";
        print_r($b);break;

    case 6:
        print_r($b);break;
    }
}
?>

</body>
</html>



