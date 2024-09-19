<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "portfolio";
$con = mysqli_connect($server, $user, $password, $database);
if (!$con) {
    echo 'connection_failed';
    header('location:index.php');
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    if (strlen($phone) != 10) {
        echo 'Length';
    } else {
        $sql = "INSERT INTO CONTACT(`firstname`,`lastname`,`email`,`phone`,`message`)VALUES('$firstname','$lastname','$email','$phone','$message');";
        $exe_sql = mysqli_query($con, $sql);
        if ($exe_sql) {
            echo 'Send';
        } else {
            echo 'Not_send';
        }
    }
}