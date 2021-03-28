
 
 <?php
header(" localhost:8888/Index.php");
die();

?> 

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Form</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script ></script>
</head>

<body>
<div class="container">
    <!-- <form action="get.php" method="GET" role="form"> -->
        <legend>Đăng nhập</legend>

      

    <form action="" method="post">
    <div class="form-group">
            <label for="">Email</label>
            <input type="text" class="form-control" id="" placeholder="" name="email">
        </div>

        <div class="form-group">
            <label for="">Password</label>
            <input type="password" class="form-control" id="" placeholder="" name="password">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
        
    <!-- </form> -->
</div>

<?php

if (isset($_POST['email'])) {
    # code...
    echo $_POST['email'];
}

if (isset($_POST['password'])) {
    # code...
    echo $_POST['password'];
}

?>


</body>
</html>
