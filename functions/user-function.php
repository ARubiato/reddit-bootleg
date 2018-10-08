<?php

require 'config-db.php';


if(isset($_POST['register-user'])) {
    

    $UNAME = isset($_POST['UNAME']) ? $_POST['UNAME'] : "";
    $PWD = isset($_POST['PWD']) ? $_POST['PWD'] : "";
    $UP_FNAME = isset($_POST['UP_FNAME']) ? $_POST['UP_FNAME'] : "";
    $UP_LNAME = isset($_POST['UP_LNAME']) ? $_POST['UP_LNAME'] : "";
    $UP_GDR = isset($_POST['UP_GDR']) ? $_POST['UP_GDR'] : "";
    $UP_EMAIL = isset($_POST['UP_EMAIL']) ? $_POST['UP_EMAIL'] : "";
    $UP_BDATE = isset($_POST['UP_BDATE']) ? $_POST['UP_BDATE'] : "";


// $HASHED_PWD = password_hash($PWD,PASSWORD_DEFAULT);




    $sql1 = "INSERT INTO user (UNAME,PWD) VALUES ('$UNAME','$PWD');";

    if(mysqli_query($sql1)) {
        $latest_id = LAST_INSERT_ID();

        $sql2 = "INSERT INTO user_profile (U_ID,UP_FNAME,UP_LNAME,UP_GDR,UP_EMAIL,UP_BDATE) VALUES ('$latest_id','$UP_FNAME','$UP_LNAME','$UP_GDR','$UP_EMAIL','$UP_BDATE')";
        
        if(mysqli_query($sql2)) {
            echo "Success";
        }
    }

header("location: ../login-user.php");
echo "Succesfully created an account!";


} else {
echo "There's an error while inserting data to database";
}

?>