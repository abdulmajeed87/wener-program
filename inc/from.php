<?php
$firstName=$_POST['firstName'];
$lastName=$_POST['lastName'];
$email=$_POST['email'];
/*
$firstName =  $_POST['firstName'];
$lastName  =  $_POST['lastName'];
$email     =  $_POST['email'];
*/
$errors = [
    'firstNameError' => '',
    'lastNameError' => '',
    'emailError' => '',
];


if (isset($_POST['submit'])){


    $sql = "INSERT INTO users(firstName, lastName, email) VALUES ('$firstName', '$lastName', '$email')";


    if(mysqli_query($conn, $sql)){
        header('Location: index.php');
    }
    else{
        echo 'error' . mysqli_error($conn);
    }
}


