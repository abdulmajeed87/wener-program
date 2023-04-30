<?php
@$firstName=$_POST['firstName'];
@$lastName=$_POST['lastName'];
@$email=$_POST['email'];
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



//تحقق الاسم الاول
if(empty($firstName)){
    $errors['firstNameError'] = 'First Name empty';
}
//تحقق الاسم الثاني
if(empty($lastName)){
$errors['lastNameError'] = 'last Name empty';
}
//تحقق الايميل
if(empty($email)){
$errors['emailError'] = 'email empty';
}
//تحقق من صحة الايميل
elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
$errors['emailError'] =  'email not correct';
}

//تحقق لايوجد اخطاء
if(!array_filter($errors)){
    $firstName =  mysqli_real_escape_String($conn, $_POST['firstName']);
    $lastName  =  mysqli_real_escape_String($conn, $_POST['lastName']);
    $email     =  mysqli_real_escape_String($conn, $_POST['email']);

    $sql = "INSERT INTO usersma(firstName, lastName, email) VALUES ('$firstName', '$lastName', '$email')";


    if (mysqli_query($conn, $sql)){
        header('Location:index.php');
    }
    else{
        echo 'error' . mysqli_error($conn);

    }
}
}
?>