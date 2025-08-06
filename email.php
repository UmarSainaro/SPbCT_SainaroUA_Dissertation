<?php
if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["phone"]) && isset($_POST["smartphone"]) && isset($_POST["remont"]) && isset($_POST["callday"]) && isset($_POST["timecall"])) {
      
    $conn = new mysqli("localhost", "root", "", "remont");
    if($conn->connect_error){
        die("Ошибка: " . $conn->connect_error);
    }
    $nameclient = $conn->real_escape_string($_POST["name"]);
    $email = $conn->real_escape_string($_POST["email"]);
    $phone = $conn->real_escape_string($_POST["phone"]);
    $smartphone = $conn->real_escape_string($_POST["smartphone"]);
    $remont = $conn->real_escape_string($_POST["remont"]);
    $callday = $conn->real_escape_string($_POST["callday"]);
    $timecall = $conn->real_escape_string($_POST["timecall"]);
    $cdate = date("d-m-Y");
    $sql = "INSERT INTO repairs (nameclient, email, phone, smartphone, remont, callday, timecall, dateorder) VALUES ('$nameclient', '$email', '$phone', '$smartphone', '$remont', '$callday', '$timecall', '$cdate')";
    if($conn->query($sql)){
        echo "<script>alert('Ваша заявка принята')</script>";
        require 'index.php';
    } else{
        echo "Ошибка: " . $conn->error;
    }
    $conn->close();
}
?>
    