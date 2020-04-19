<?php
session_start();

$con = mysqli_connect('localhost','root');
if($con){
    echo "connection successful";
    
}else{
    echo "no connection";
    
}

mysqli_select_db($con, 'sessionpractical');

$name = $_POST['username'];
$pass = $_POST['password'];

$q = "select * from signin where name = '$name' && password = '$pass'" ;

$result = mysqli_query($con, $q);
$num = mysqli_num_rows($result);

if($num == 1)
{
    $_SESSION['username'] = $name;
    $_SESSION['password'] = $pass;
    
    header('location:index.php');
}
else
{
     
$_SESSION['errors'] = array("Your username or password was incorrect.");
       header("location:login.php"); 
 
}
?>