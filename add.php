<?php

include('db.php');

if(isset($_POST)){

  $nameog =htmlspecialchars($_POST['task']);


  echo $nameog;
  $sql="INSERT INTO tasks(name) values('$nameog')";

  $val=$db->query($sql);

  if($val){
    echo "<h1>Success</h1>";
  }
  else {
    echo "<h1>Con't Save.An Error Occure</h1>";
  }

}

 ?>
