
<?php

session_start();


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
    
    $query = "SELECT * FROM usertable WHERE name = '$username' && password = '$password'";
    $result = mysqli_query($con, $query);
  
    if(mysqli_num_rows($result) == 1){
      header('location:home.php');
    }else{
       header('location:Login.php');
    }
  }
}else {
  echo "Something went wrong";
}
      
?>