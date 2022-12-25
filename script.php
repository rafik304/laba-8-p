
<?php  
$x1 = $_POST["x1"];
$x2 = $_POST["x2"];
$x3 = $_POST["x3"];
$y1 = $_POST["y1"];
$y2 = $_POST["y2"];
$y3 = $_POST["y3"];
$z1 = $_POST["z1"];
$z2 = $_POST["z2"];
$z3 = $_POST["z3"];
$array = array( array($x1, $x2 , $x3),
                  array($y1, $y2 , $y3),
                  array($z1, $z2 ,$z3 ) 
                ); 
for ($row = 0; $row < 3; $row++) {
	
    for ($col = 0; $col < 3; $col++) {
        echo $array[$row][$col] ;
    }
    echo "<br>";
}
    $sum = 0 ;
for ($i = 0; $i <= 2; ++$i) {
    $sum += $array[$i][$i];
}
echo "Сумма диагонали : ".$sum;
?>