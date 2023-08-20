<?php
include("conf.php"); 

if (isset($_POST['change'])){
    $uname = $_POST['username']; 
    $newuname = $_POST['usernameNew']; 
   
    $queryUser = mysqli_query($db, "SELECT * FROM usertest WHERE name ='$uname'"); 

    if ($uname === "" ) {
        header("Location: update.php?status=empty1");
    }
    else if (mysqli_num_rows($queryUser) == 0  ){
        header("Location: update.php?status=usernoexist"); 
    }
    else {
        $updateUser = "UPDATE usertest SET name ='$newuname' WHERE name='$uname'"; 

        $q_user = mysqli_query($db, $updateUser); 

        if($q_user){
            header('Location: input.php?status=success');
        }
        else {
            echo "Error: " . $addQuery . ":-" . mysqli_error($db);
        }
    }
}


?>