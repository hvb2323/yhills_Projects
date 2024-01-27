<?php
$success=0;
$user=0;
if($_SERVER['REQUEST_METHOD']=='POST'){
        include 'connect.php';
        $username=$_POST['username'];
        $password=$_POST['password'];

        $sql="select * from registration where username='$username'";
        $result=mysqli_query($con,$sql);
        if($result){
            $num=mysqli_num_rows($result);
            if($num>0){
                //echo "user already exists";
                $user=1;
            }else{

        $sql="insert into registration (username,password) values('$username','$password')";
        $result=mysqli_query($con,$sql);
        if($result){
            //echo "signup succesful";
            $success=1;
        }else{
            die(mysqli_error($con));
        }
    }
 }
}
?>




<!doctype html>
<html lang="en">
  <head>
  <link rel="stylesheet" href="styles.css">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Signup page</title>
  </head>
  <body>
<?php
if($success){
  echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>success!</strong> succesfully signed up.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
}
if($user){
  echo'<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>oh no !</strong>user already exists.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
}
?>



    <h1 class="hvb1",>Sign up page</h1>
    <div class='container mt-5'>
  <form action="signin.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1" class='hvb'>Name</label>
    <input type="text" class="form-control"  placeholder= "Enter your username" name='username'>

  </div>
  <div class="form-group">
    <label for="exampleInputPassword1" class='hvb' >Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name='password'>
  </div>

  <button type="Sign up" class="btn btn-primary w-100">Signup</button>
  <h1 class="hvb1",>OR</h1>
  <div class="btn-container2">
    <a href="login.php" class="btn btn-primary1 w-100">signin</a>
</div>
</form>
    
  </body>
</html>
