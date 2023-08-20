<?php
include("conf.php"); 

if (isset($_POST['change'])){
    $email = $_POST['email']; 
    $newemail = $_POST['emailNew']; 
   
    $queryEmail = mysqli_query($db, "SELECT * FROM usertest WHERE email ='$email'"); 

    if ($email === "" ) {
        header("Location: update.php?status=empty2");
    }
    else if (mysqli_num_rows($queryEmail) == 0  ){
        header("Location: update.php?status=emailnoexist"); 
    }
    else {
        $updateEmail = "UPDATE usertest SET email ='$newemail' WHERE email='$email'"; 
        $q_email = mysqli_query($db, $updateEmail); 

        if($q_email){
            header('Location: input.php?status=success');
        }
        else {
            echo "Error: " . $addQuery . ":-" . mysqli_error($db);
        }
    }
}


?>