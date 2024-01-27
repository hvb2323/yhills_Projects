<?php
$login=0;
$invalid=0;
if($_SERVER['REQUEST_METHOD']=='POST'){
        include 'connect.php';
        $username=$_POST['username'];
        $password=$_POST['password'];

        $sql="select * from registration where username='$username' and password='$password' ";
        $result=mysqli_query($con,$sql);
        if($result){
            $num=mysqli_num_rows($result);
            if($num>0){
                $login=1;
                session_start();
                $_SESSION['username']=$username;
                header('location:home.php');
            }else{
                $invalid=1;
         }
 }
}
?>




<!doctype html>
<html lang="en">
  <head>
  <link rel="stylesheet" href="styles1.css">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Login page</title>
  </head>
  <body>
  <?php
if($login){
  echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>login succesful!</strong> you are succesfully signed in.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
}
if($invalid){
  echo'<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>oh no !</strong>invalid credentials.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
}
?>
    <h1 class="hvb1",>Login into our website</h1>
    <div class='container mt-5'>
  <form action="login.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1" class='hvb'>Name</label>
    <input type="text" class="form-control"  placeholder= "Enter your username" name='username'>

  </div>
  <div class="form-group">
    <label for="exampleInputPassword1" class='hvb' >Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name='password'>
  </div>

  <button type="Sign in" class="btn btn-primary w-100">Login</button>
  <h1 class="hvb1">OR</h1>
  <div class="btn-container1">
    <a href="signin.php" class="btn btn-primary1 w-100">signup</a>
</div>
</form>
    
  </body>
</html>
