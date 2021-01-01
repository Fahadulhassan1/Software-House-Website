<?php
$con = mysqli_connect('localhost' , 'root');
if($con){
    echo "connect established>";

}else{
    echo "connect failed>";
}
mysqli_select_db($con  , 'softwarehouse');
$email = $_POST["subscription"];
$query = "insert into subscriber (email) values( '$email') ";
mysqli_query($con , $query);
header("Location: index.html");


?>