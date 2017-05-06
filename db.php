<?php
$db=new Mysqli;
$db->connect('localhost','root','','task');

if(!$db){
echo "Don't connect to DataBase";
}
?>
