<?php
$numbers=array(1,2,3,4,5,6,7,8,9);
print_r("total numbers in above array =" .count($numbers));
echo "</br>";
echo "those numbers are :-";
foreach( $numbers as $num)
{
    echo "</br>";
    print_r($num);
    echo "</br>";
}
?>