  <html>
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Input Form</title>
  </head>
  
  <body>
      <h2>String Form</h2>
  
      <form method="POST">
          Enter the String:<input type="text" name="string"> <br> <br>
  
          <label for="symbol">Choose a symbol:</label>
          <select name="symbol" id="symbol">
              <option value="@">@</option>
              <option value="#">#</option>
              <option value="%">%</option>
          </select> <br><br>
  
          <label for="smbol">Choose a symbol to replace:</label>
          <select name="smbol" id="smbol">
              <option value="?">?</option>
              <option value="!">!</option>
              <option value="$">$</option>
          </select> <br><br>
  
          <input type="submit" value="Submit">
  
      </form>
  
      <?php
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  
          $fstring = $_POST["string"];
          $ssymbol = $_POST["symbol"];
          $rsymbol = $_POST["smbol"];
  
  
          $str = $fstring;
          $seperatedStr = str_replace(" ",$ssymbol,$str);
          $rstring=str_replace($ssymbol,$rsymbol,$seperatedStr);
          echo($seperatedStr);
          echo "<br><br>";
          echo($rstring);
          
          
    
          function lastword($str1){
            
          $fstring = $_POST["string"];
          $pos = strrpos($fstring, ' ');
          if (!$pos) {
              $pos = 0;
          } else {
              $pos = $pos + 1;
          }
          $lword = substr($fstring, $pos);
  
          return $lword;
      }
          echo "<br><br>";
          echo "last word of a given string is:";
          echo lastword($fstring);
      }
      ?>
  
  </body>
  
  </html>