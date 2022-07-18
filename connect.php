 <?php

    $conn = mysqli_connect("localhost", "zalbo", "pass", "The_Midland");



    if (mysqli_connect_errno()) {
        echo "COnnection Failed:" . mysqli_connect_error();
        exit;
    }


    // function get_connection()
    // // {
    //     $conn = mysqli_connect("localhost", "zalbo", "pass", "The_Midland");
    //     echo "Connection successfull";
    //     return $conn;
    // }

    // function insert_contact($fullName, $email, $subj, $msg)
    // {
    //     $conn = get_connection();
    //     $sql = "INSERT INTO contact (fullName,email,subj,msg)
    // VALUES ('$fullName','$email','$subj','$msg')";
    //     echo $sql;
    //     try {
    //         if ($conn->query($sql) === TRUE) {
    //             $message = "New record created successfully";
    //             echo "<script>alert('" . $message . "')</script>";
    //         } else {
    //             $message =  "Error: " . $sql . "<br>" . $conn->error;
    //             echo "<script>alert('" . $message . "')</script>";
    //         }
    //     } catch (Exception $e) {
    //         $error = $e->getMessage();
    //         echo $error;
    //     }
    // }
    // }





    ?>