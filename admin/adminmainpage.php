<?php
session_start();
if(!isset($_SESSION['user'])){
  header("Location: adminlogin.php");
}
?>

<!doctype html>
<html lang="en">

<head>
    <title>Admin Panel</title>
    <link rel="stylesheet" href="adminmainpage.css" />
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw=="
        crossorigin="anonymous" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="header" id="topheader">
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top ">
            <div class="container text-uppercase p-2">
                <a class="navbar-brand font-weight-bold text-white" href="index.html">CanvaPk</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="adminmainpage.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#subscriber">Subscribers</a>
                        </li>
                        <li class="nav-item">
                            <a class="bt btn-danger nav-link" href="logout.php">Logout</a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>


    </div>



    <div class="main-div">
        <h1>List of The People who contacted Us</h1>
        <div class="center-div">
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Contact</th>
                            <th>Details</th>
                            <th>Date</th>
                            <th colspan="2">Operations</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
  $con = mysqli_connect('localhost' , 'root');
  if($con){
      
  }else{
      echo "connect failed!\n";
  }
  $db = mysqli_select_db($con ,'softwarehouse');
$selectquery = "select * from  form ";
$query = mysqli_query($con , $selectquery);
$length = mysqli_num_rows($query);

while($result =  mysqli_fetch_array($query)){
   
    ?>
                        <tr>
                            <td><?php echo $result['id']; ?></td>
                            <td><?php echo $result['Username']; ?></td>
                            <td><span class="email-style"><?php echo $result['Email']; ?></span></td>
                            <td><?php echo $result['ContactNumebr']; ?></td>
                            <td><?php echo $result['Details']; ?></td>
                            <td><?php echo $result['Date']; ?></td>
                            <td><a href="#" data-toggle="tooltip" data-placement="bottom" title="Update"><i
                                        class="fa fa-edit" aria-hidden="true"></i></a> </td>
                            <td><a href="delete.php?id= <?php echo $result['id']; ?>" data-toggle="tooltip"
                                    data-placement="bottom" title="Delete"><i class="fa fa-trash"
                                        aria-hidden="true"></i></a> </td>

                        </tr>

                        <?php
                        }

?>



                    </tbody>

                </table>
            </div>


        </div>

    </div>

    <!-- Subscribers-->
    <div class="main-div " id="subscriber">
        <h1>List of The People who Subscribed Us</h1>
        <div class="center-div">
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Email</th>
                            <th>Date</th>
                            <th colspan="2">Operations</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
  $con = mysqli_connect('localhost' , 'root' , '' , 'softwarehouse');
  if($con){
      
  }else{
      echo "connect failed!\n";
  }
  $db = mysqli_select_db($con ,'softwarehouse');
$selectquery = "select * from  subscriber ";
$query = mysqli_query($con , $selectquery);
$length = mysqli_num_rows($query);

while($result =  mysqli_fetch_array($query)){
   
    ?>
                        <tr>
                            <td><?php echo $result['id']; ?></td>

                            <td><span class="email-style"><?php echo $result['email']; ?></span></td>
                            <td><?php echo $result['Date']; ?></td>
                            <td><a href="#" data-toggle="tooltip" data-placement="bottom" title="Update"><i
                                        class="fa fa-edit" aria-hidden="true"></i></a> </td>
                            <td><a href="deletesubscriber.php?id= <?php echo $result['id']; ?>" data-toggle="tooltip"
                                    data-placement="bottom" title="Delete"><i class="fa fa-trash"
                                        aria-hidden="true"></i></a> </td>

                        </tr>

                        <?php
                        }

?>



                    </tbody>

                </table>
            </div>


        </div>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script>
    $(document).ready(function() {
        $('[data-toggle="tooltip"]').tooltip();
    });
    </script>
</body>

</html>