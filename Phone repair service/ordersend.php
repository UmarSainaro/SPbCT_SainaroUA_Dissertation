<?php
if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["phone"]) && isset($_POST["tovar"]) && isset($_POST["address"]) && isset($_POST["color"])) {
      
    $conn = new mysqli("localhost", "root", "", "orders");
    if($conn->connect_error){
        die("Ошибка: " . $conn->connect_error);
    }
    $nameclient = $conn->real_escape_string($_POST["name"]);
    $email = $conn->real_escape_string($_POST["email"]);
    $phone = $conn->real_escape_string($_POST["phone"]);
    $tovar = $conn->real_escape_string($_POST["tovar"]);
    $addressclient = $conn->real_escape_string($_POST["address"]);
    $color = $conn->real_escape_string($_POST["color"]);
    $sql = "INSERT INTO buyers (nameclient, email, phone, tovar, addressclient, color) VALUES ('$nameclient', '$email', '$phone', '$tovar', '$addressclient', '$color')";
    if($conn->query($sql)){
        echo "<script>alert('Ваша заявка принята')</script>";
        require 'catalogue.php';
    } else{
        echo "Ошибка: " . $conn->error;
    }
    $conn->close();
}
?>
    