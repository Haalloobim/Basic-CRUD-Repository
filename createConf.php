<?php
include("conf.php"); 

if(isset($_POST['create'])){
    $uname = $_POST['username']; 
    $email = $_POST['email']; 
    $age = $_POST['umur']; 

    $queryUser = mysqli_query($db, "SELECT * FROM usertest WHERE name ='$uname'"); 
    $queryEmail = mysqli_query($db, "SELECT * FROM usertest WHERE email ='$email'");
    $queryUmur = mysqli_query($db, "SELECT * FROM usertest WHERE age ='$age'");

    if($uname === "admin" || $uname === "Admin"){
        die("Error: You can't register as admin"); 
    }
    else if (mysqli_num_rows($queryUser) >= 1 && mysqli_num_rows($queryEmail) >= 1){
        header('Location: create.php?status=user_exist&&status=email_exist');
    }
    else if (mysqli_num_rows($queryUser) >= 1) { // username duplicate
        header('Location: create.php?status=user_exist');
    } 
    else if (mysqli_num_rows($queryEmail) >= 1) { // email duplicate
        header('Location: create.php?status=email_exist');
    } 
    else {
        $addQuery = "INSERT INTO usertest (name, email, age) VALUES ('$uname', '$email', '$age')";
        $query = mysqli_query($db, $addQuery); 

        if ($query){
            header('Location: input.php?status=success');
        }
        else {
            echo "Error: " . $addQuery . ":-" . mysqli_error($db); 
        }
    }
}

?>