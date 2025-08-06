<?php
if (isset($_POST["name"]) && isset($_POST["phone"]) && isset($_POST["smartphone"]) && isset($_POST["remont"]) && isset($_POST["status"])) {
      
    $conn = new mysqli("localhost", "root", "", "remont");
    if($conn->connect_error){
        die("Ошибка: " . $conn->connect_error);
    }
    $nameclient = $conn->real_escape_string($_POST["name"]);
    $phone = $conn->real_escape_string($_POST["phone"]);
    $smartphone = $conn->real_escape_string($_POST["smartphone"]);
    $remont = $conn->real_escape_string($_POST["remont"]);
    $statusorder = $conn->real_escape_string($_POST["status"]);
    $cdate = date("d-m-Y");
    $sql = "INSERT INTO uchet (nameclient, phone, smartphone, remont, statusorder, dateorder) VALUES ('$nameclient', '$phone', '$smartphone', '$remont', '$statusorder', '$cdate')";
    if($conn->query($sql)){
        echo "<script>alert('Статус заявки изменен')</script>";
        require 'orders.php';
    } else{
        echo "Ошибка: " . $conn->error;
    }
    $conn->close();
}
?>
    