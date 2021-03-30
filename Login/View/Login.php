
<?php
require("../Models/Login.php");
if(isset($_POST['email']))
{
    $emai = $_POST['email'];
    $pass = $_POST['password'];
    $login = new Login($emai, $pass);
    if($login->login()){
        header('location:index.php');
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Form</title>
    
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

  
    <script ></script>
</head>

<body>
<div class="container">
    
        <legend>Đăng nhập</legend>

    <form action="" method="post" role="form">

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

</body>
</html>
