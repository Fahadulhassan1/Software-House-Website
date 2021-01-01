<?php
session_start();
$con = mysqli_connect('localhost' , 'root');
if($con){
    echo "connect sucess!\n";
}else{
    echo "connect failed!\n";
}
$db = mysqli_select_db($con ,'softwarehouse');
if(isset($_POST['submit'])){
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $sql = "SELECT * from login where username = '$user' and password = '$pass'";

    $query = mysqli_query($con , $sql);
    $row = mysqli_num_rows($query);
            if($row == 1){
                echo "<login scessful>";
                $_SESSION['user'] = $user;
                header('Location:adminmainpage.php');
            }else{
                echo "<login failed>";
                header('Location: adminlogin.php');
            }
}

?>