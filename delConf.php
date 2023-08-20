<?php
include("conf.php");

if (isset($_POST['delete'])){
    $uname = $_POST['username']; 
    $email = $_POST['email'];

    
    $queryUser = mysqli_query($db, "SELECT * FROM usertest WHERE name ='$uname'"); 
    $queryEmail = mysqli_query($db, "SELECT * FROM usertest WHERE email ='$email'");

    if(($uname == "" && $email == "")  ){
        header("Location: delete.php?status=gakada"); 
    }
    else if(($uname != "" && $email != "")){
        header("Location: delete.php?status=fullbang");
    }
    else if ( $uname != "" && mysqli_num_rows($queryUser) == 0) {
        header("Location: delete.php?status=usernoexist"); 
    }
    else if (mysqli_num_rows($queryEmail) == 0 && $email != ""){
        header("Location: delete.php?status=emailnoexist"); 
    }
    else{
        $delUser = "DELETE FROM usertest WHERE name ='$uname'"; 
        $delEmail = "DELETE FROM usertest WHERE email ='$email'";

        $query_1 = mysqli_query($db, $delUser);
        $query_2 = mysqli_query($db, $delEmail); 

        if($query_1){
            header('Location: input.php?status=success');
        }
        else if ($query_2){
            header('Location: input.php?status=success');
        }
        else {
            echo "Error: " . $addQuery . ":-" . mysqli_error($db);
        }
    }
}


?>