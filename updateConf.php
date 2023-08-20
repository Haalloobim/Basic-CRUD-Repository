<?php
include("conf.php"); 

if (isset($_POST['change'])){
    $uname = $_POST['username']; 
    $email = $_POST['email'];
   
    $queryUser = mysqli_query($db, "SELECT * FROM usertest WHERE name ='$uname'"); 
    $queryEmail = mysqli_query($db, "SELECT * FROM usertest WHERE email ='$email'");

    
}


?>