<?php

include("connect.php");



if (isset($_POST['submit'])) {
    $name = $_POST['visitor_name'];
    $email = $_POST['visitor_email'];
    $phone = $_POST['visitor_phone'];
    $adult = $_POST['total_adults'];
    $child = $_POST['total_children'];
    $checkin = $_POST['checkin'];
    $checkout = $_POST['checkout'];
    $pref = $_POST['room_preference'];
    $comment = $_POST['visitor_message'];


    $request = " insert into book (name,email,phone,adult,child,checkin,checkout,pref,comment) values('$name','$email','$phone','$adult','$child',' $checkin',' $checkout','$pref','$comment') ";
    mysqli_query($conn, $request);
    if ($request) {
        $message = "New record created successfully";
        echo "<script>alert('" . $message . "')</script>";
        header('location:index.php');
    }

    header('location:index.php');
}