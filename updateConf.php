<?php
include("conf.php"); 

if (isset($_POST['change'])){
    $uname = $_POST['username']; 
    $email = $_POST['email'];
    $newuname = $_POST['usernameNew']; 
    $newemail = $_POST['emailNew'];
   
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
        $updateUser = "UPDATE usertest SET name ='$newuname' WHERE name='$uname'"; 
        $updateEmail = "UPDATE usertest SET email ='$newemail' WHERE email='$email'"; 

        $q_user = mysqli_query($db, $updateUser); 
        $q_email = mysqli_query($db, $updateEmail); 

        if($q_user){
            header('Location: input.php?status=success');
        }
        else if ($q_email){
            header('Location: input.php?status=success');
        }
        else {
            echo "Error: " . $addQuery . ":-" . mysqli_error($db);
        }
    }
}


?>