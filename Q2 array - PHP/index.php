<!DOCTYPE html>
<html>
<body>

<?php

$Product = array("Bike"=>"100", "TV"=>"200", "Album"=>"10","Book"=>"5","Phone"=>"500","Computer"=>"1000");
 asort($Product); 
    echo "<b>Order from the cheap product</b><br/>";
    foreach($Product as $x => $x_value) {
    
  echo  $x . "&nbsp; for " . $x_value."$";
    
  echo "<br>";
    }
    echo "<b>Order from the Expensive product</b><br/>";
    arsort($Product);

foreach($Product as $x => $x_value) {
    
  echo  $x . "&nbsp; for " . $x_value."$";
    
  echo "<br>";
}

?>

</body>
</html>
