<?php
//Check if update button has been clicked
if (isset($_GET["my_id"])){
    $receivedname=$_GET["my_name"];
    $receivedemail=$_GET["my_email"];
    $receivedpassword=$_GET["my_pass"];
    $receivedid=$_GET["my_id"];

}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update</title>
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
        <form action="update_handler.php" method="post">
            <div class="form-group">
                <input value="<?php echo $receivedname?>" class="form-control" type="text" name="x" placeholder="Enter name">
            </div>
            <div class="form-group">
                <input value="<?php echo $receivedemail?>" class="form-control" type="email" name="y" placeholder="Enter email">
            </div>
            <div class="form-group">
                <input value="<?php echo $receivedpassword?>" class="form-control" type="password" name="z" placeholder="Enter password">
            </div>
            <input type="hidden" value="<?php echo $receivedid?>" name="id_yangu">
            <input type="submit" value="Update" class="btn btn-outline-info btn-block" name="btn_update">
            <a href="users.php" class="btn btn-outline-danger btn-block">Cancel</a>
        </form>
    </div>
    <div class="col-3"></div>
</div>



</body>
</html>

