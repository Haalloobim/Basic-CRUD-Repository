<?php
include("conf.php"); 

if (isset($_POST['change'])){
    $uname = $_POST['username']; 
    $email = $_POST['email'];
   
    $queryUser = mysqli_query($db, "SELECT * FROM usertest WHERE name ='$uname'"); 
    $queryEmail = mysqli_query($db, "SELECT * FROM usertest WHERE email ='$email'");

    if ($uname !== "" || $email !== ""){
        header("Location: update.php?status=empty");
    }
    else if (mysqli_num_rows($queryUser) == 0){
        header("Location: update.php?status=usernoexist"); 
    }
    else if (mysqli_num_rows($queryEmail) == 0){
        header("Location: update.php?status=emailnoexist"); 
    }
    else {

    }


}


?>