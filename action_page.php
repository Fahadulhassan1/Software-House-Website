<?php
$con = mysqli_connect('localhost' , 'root');
if($con){
    echo "connection established";
}else{
    echo "connection lost";
}
mysqli_select_db($con  ,'softwarehouse' );
$Username = $_POST['username'];
$Email = $_POST['email'];
$ContactNumber = $_POST['telephone'];
$Details = $_POST['details'];
$Date  = date('Y-m-d H:i:s');
$query = "insert into form (Username , Email ,ContactNumebr , Details , Date )
values ('$Username' , '$Email' , '$ContactNumber' , '$Details' , '$Date' )";

mysqli_query($con ,$query);

 
header('location: ./index.html');
?>