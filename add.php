<?php

include('db.php');

if(isset($_POST)){

  $nameog =htmlspecialchars($_POST['task']);


  echo $nameog;
  $sql="INSERT INTO tasks(name) values('$nameog')";

  $val=$db->query($sql);

  if($val){
    header('location:index.php');
  }
  else {
    echo "<h1>Con't Save.An Error Occure</h1>";
  }

}

 ?>
