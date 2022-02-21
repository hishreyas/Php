<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<form method="post">
Enter The String :
<input type="string" name="string" /><br><br>
<table>
<tr>
<td>Length</td>
<td><input type="radio" name="ch" value=1></td>
</tr>
<tr>
<td>Vowel</td>
<td><input type="radio" name="ch" value=2></td>
</tr>
<tr>
<td>Lower and Title</td>
<td><input type="radio" name="ch" value=3></td>
</tr>
<tr>
<td>Padding</td>
<td><input type="radio" name="ch" value=4></td>
</tr>
<tr>
<td>Leading Trim</td>
<td><input type="radio" name="ch" value=5></td>
</tr>
<tr>
<td>Reverse</td>
<td><input type="radio" name="ch" value=6></td>
</tr>
</table>
<input type="submit" name="submit" value="Calculate">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  function length()
  {
    $str = $_POST['string'];
    $i = 0;
    while (@$str[$i++] != NULL);
    $i--;
    echo "Length of : $str is :" . $i;
    echo "<br>";
  }
  function vowell()
  {
    $str = strtolower($_POST['string']);
    $vowels = array('a', 'e', 'i', 'o', 'u');
    $len = strlen($str);
    $num = 0;
    for ($i = 0; $i < $len; $i++) {
      if (in_array($str[$i], $vowels)) {
        $num++;
      }
    }
    echo "Number of vowels in $str is: " . $num;
    echo "<br>";
  }
  function lowTit()
  {
    $str = $_POST['string'];
    $res1 = strtolower($_POST['string']);
    $res2 = ucwords(strtolower($_POST['string']));
    echo "The string to lower-case of $str is: " . $res1;
    echo "<br>";
    echo "The string to Title-case of $str is: " . $res2;
    echo "<br>";
  }
  function pads()
  {
    $str = $_POST['string'];
    $result = str_pad($str, 20, "*", STR_PAD_BOTH);
    echo "The padded string of $str is: " . $result;
    echo "<br>";
  }
  function leadTrim()
  {
    $str = $_POST['string'];
    $ans = rtrim($str);
    echo "Leading Trimmed of $str is: " . $ans;
    echo "<br>";
  }
  function rever()
  {
    $str = $_POST['string'];
    $ans = strrev($str);
    echo "Reversed string of $str is: " . $ans;
  }
  
  $ch = $_POST["ch"];
  if (isset($_POST['submit'])) {
    switch ($ch) {
      case 1:
        length();
        break;
        case 2:
          vowell();
          break;  
          case 3:
            lowTit();
            break;
            case 4:
              pads();
              break;
              case 5:
                leadTrim();
                break;
                case 6:
                  rever();
                  break;
    }
  }
}

?>
</body>

</html>