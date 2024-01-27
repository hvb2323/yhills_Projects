<?php
session_start();
if(!isset($_SESSION['username'])){
  header('location:login.php');
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles2.css">
  <title>Welcome page</title>
</head>
<body>
<div class="hvb1">welcome to my website
  </div>
  <h1>Welcome
    <?php echo $_SESSION['username'];?></h1>
    <div class="btn-container">
    <a href="logout.php" class="btn btn-primary">Logout</a>
</div>

</div>
</body>
</html>
