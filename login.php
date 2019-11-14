<?php

$email="info@gmail.com";
$password="123";

$userEmail=isset($_POST["email"])?$_POST["email"]:"";
$userPassword=isset($_POST["password"])?$_POST["password"]:"";

if(isset($_POST["loginBtn"]))
{
  if($email==$userEmail && $password==$userPassword)
  {
    echo "<script>location='admin.php'</script>";
  }
  else
  {
    echo "<script>alert('Your Email or Password Is Incorrect...')</script>";
  }
}

?>
