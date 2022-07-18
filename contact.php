<?php

include("connect.php");



if (isset($_POST['send'])) {

    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $subj = $_POST['subject'];
    $msg = $_POST['message'];

    $reques = " insert into contact (fullName,email,subj,msg) values('$fullName','$email','$subj','$msg')";
    mysqli_query($conn, $reques);

    header('location:index.php');
} else {
    echo 'something went wrong please try again!';
}