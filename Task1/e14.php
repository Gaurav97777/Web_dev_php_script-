<?php
$info=array("name"=>'gaurav',"age"=>22,"email"=>'gauravshing09@gmailcom');
echo"before deleting the email<br/>=";
print_r($info);
echo"<br/>after deleting<br/>";
array_pop($info);
print_r($info);

?>
