
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <form method="post">
        Enter First Number:
        <input type="number" name="number1" /><br><br>
        Enter Second Number:
        <input type="number" name="number2" /><br><br>
        <input type="submit" name="submit" value="Calculate">
    </form>
  <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        function add()
        {
            $number1 = $_POST['number1'];
            $number2 = $_POST['number2'];
            $sum =  $number1 + $number2;
            echo "The sum of $number1 and $number2 is: " . $sum;
            echo "<br>";
        }
        function mod()
        {
            $number1 = $_POST['number1'];
            $number2 = $_POST['number2'];
            $mod = $number1 % $number2;
            echo "The mod of $number1 and $number2 is: " . $mod;
            echo "<br>";
        }
        function rais()
        {
            $number1 = $_POST['number1'];
            $number2 = $_POST['number2'];
            $pow = $number1 ** $number2;
            echo "The result of $number1 raise $number2 is: " . $pow;
            echo "<br>";
        }
        function fact()
        {
            $number2 = $_POST['number2'];
            $factorial = 1;
            for ($x = $number2; $x >= 1; $x--) {
                $factorial = $factorial * $x;
            }
            echo "Factorial of $number2 is: " . $factorial;
        }
        
    mod();
    add();
    rais();
    fact();
    }

    ?>
</body>

</html>
