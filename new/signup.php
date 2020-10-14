<?php 
include 'dbh.php';

$uname=$_POST['uname'];
$email=$_POST['Email'];
$pass=$_POST['password'];

$sql="insert into signup(username,email,password)
values('$uname','$email','$pass')";
$sql=$conn->query($sql);

header("Location:index.php");

 ?>