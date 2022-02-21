
   <?php
       if ($_SERVER['REQUEST_METHOD'] === 'GET') {
$a = array("GAITONDE", "BUNTY", "KUKU", "MATHU", "PUJA", "SIYA", "AJAY", "SAMEER", "VIJAY", "VINAY", "VIRAJ");


if($_GET){
$q = $_GET['q'];
if (strlen($q) > 0) {
    $match = "";
    for ($i = 0; $i < count($a); $i++) {
        if (strtolower($q) == strtolower(substr($a[$i], 0, strlen($q)))) {
            if ($match == "") {
                $match = $a[$i];
            } else {
                $match = $match . "," . $a[$i];
            }
        }
    }

    if ($match == "") {
        echo "No Suggestions";
    } else {
        echo $match;
    }
}
}
}
?>