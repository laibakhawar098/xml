<?php
!xml=new DOMDocument();
$xml->load("employee.xml")
if($xml->validate()){
    echo "valid";
}
else{
    echo "not valid";
}
?>
