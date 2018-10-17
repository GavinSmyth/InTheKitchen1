<?php

session_start();

$con = mysqli_connect('localhost','root','','registration');
if(!$con){
  die("db error");
  echo "database not connected";
}else{
  echo "database successful";
}

// mysqli_select_db($con,'registration');

$name = $_POST['user'];
$pass = $_POST['password'];

$s = "select * from usertable where name = '$name' ";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num==1){
  echo"username taken";
}else{
  $reg= "insert into usertable(name, password) values('$name', '$pass')";
  mysqli_query($con, $reg);
  echo"registration successful";
}

?>