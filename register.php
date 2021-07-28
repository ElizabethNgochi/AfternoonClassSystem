<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <script src=" bootstrap/js/jquery-3.4.0.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
    <h1 class="text-info text-center">Afternoon Class Complete System</h1>
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <form action="register_handler.php" method="post">
                <div class="form-group">
                    <input class="form-control" type="text" name="x" placeholder="Enter name">
                </div>
                <div class="form-group">
                    <input class="form-control" type="email" name="y" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <input class="form-control" type="password" name="z" placeholder="Enter password">
                </div>
                <input type="submit" value="Register" class="btn btn-outline-info btn-block" name="btn_reg">
                <a href="users.php" class="btn btn-outline-success btn-block">View Users</a>
            </form>
        </div>
        <div class="col-3"></div>
    </div>



</body>
</html>