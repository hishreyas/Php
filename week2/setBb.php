<html>

<head>
 
<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script type="text/javascript">
        function m1(str) {
            var ob = false;
            ob = new XMLHttpRequest();
            ob.onreadystatechange = function() {
                if (ob.readyState == 4 && ob.status == 200)
                    document.getElementById("a").innerHTML = ob.responseText;
            }
            ob.open("GET", "search.php?q=" + str,true);
            ob.send();
        }
    </script>
</head>

<body bgcolor="blanchedalmond">
    <form id="form_s">
        Enter Name Of Student :<input type=text name=search size="20" onkeyup="m1(form.search.value)">
    </form>
    suggestions :<span id="a"></span><br>

 

</body>

</html>
