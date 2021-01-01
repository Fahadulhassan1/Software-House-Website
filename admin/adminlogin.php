<!doctype html>
<html lang="en">

<head>
    <title>Login</title>
    <?php 
    
    
    ?>


    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="adminlogin.css">
</head>

<body>
    <header>
        <div class='container center-div shadow '>


            <div class="heading text-uppercase text-dark text-center mb-5">Admin Login</div>
            <div class="container row d-flex justify-content-center mb-5">
                <div class="admin-form shadow p-3">
                   
                        <form action="logincheck.php" method="POST">
                            <div class="form-group">
                                <label>User Name</label>
                                <input type="text" name="username" value="" class="form-control" autocomplete="off">

                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="text" name="password" value="" class="form-control" autocomplete="off">

                            </div>
                            <input type="submit" class="btn btn-danger" name="submit">
                        </form>
                    

                </div>


            </div>


        </div>

    </header>
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
</body>

</html>