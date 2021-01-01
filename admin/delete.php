<?php
  
  
  $con = mysqli_connect('localhost' , 'root' , '' , 'softwarehouse');
  if($con){
     
  }else{
      echo "connect failed!\n";
  }
  $id = $_GET['id'];
  $deletequery = "delete from form where id = $id ";
  $query = mysqli_query($con , $deletequery);
  header('location:adminmainpage.php')
?>