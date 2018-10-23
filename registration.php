
<?php

session_start();
header('location:Login.php');

$con = mysqli_connect('localhost','root','','registration');
if(!$con){
  die("db error");
}

if(isset($_POST["submit"])){
  $username = $_POST["username"];
  $password = $_POST["password"];
  if(!empty($username) && !empty($password)){
    $username = mysqli_real_escape_string($con, $username); 
    $password = mysqli_real_escape_string($con, $password);
    
    $query = "SELECT * FROM usertable WHERE name = '$username'";
    $result = mysqli_query($con, $query);
    
    if(mysqli_num_rows($result) == 1){
      echo "Username already taken";
    } else {
      $query = "INSERT INTO usertable (name, password) VALUES('$username', '$password')";
      $result = mysqli_query($con, $query);
      echo "Registration Successful";
    }
  }
} else {
  echo "Something went wrong";
}
      
?>