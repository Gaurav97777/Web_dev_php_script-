<?php
$fruit=array('mango','apple');
print_r($fruit);
echo"<br/>";
$veggies=array('garlic','ginger');
print_r($veggies);
echo"<br/>";
echo"mergging both array ";
print_r(array_merge($fruit,$veggies));
?>