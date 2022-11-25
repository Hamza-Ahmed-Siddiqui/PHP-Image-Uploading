<?php
 include('include/config.php');
  $email = $_POST['email'];
  $password = $_POST['password'];
  $image= $_FILES['image'];
  $imagename = $image['name'];
  $tempimagename = $image['tmp_name'];

  move_uploaded_file($tempimagename,'images/'.$imagename.'');
  mysqli_query($conn,"insert into user values(null,'$email','$password','$imagename')");

  header('Location:show.php');
