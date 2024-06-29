<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connection checking</title>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "online_food_order";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $customer_name = $conn->real_escape_string($_POST['customer_name']);
    $food_name = $conn->real_escape_string($_POST['food_name']);
    $phone_number = $conn->real_escape_string($_POST['phone_number']);
    $quantity = (int)$_POST['quantity'];

    $stmt = $conn->prepare("INSERT INTO food_order (customer_name, food_name, phone_number, quantity) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("sssi", $customer_name, $food_name, $phone_number, $quantity);

    if ($stmt->execute()) {
        echo "Information added successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
}
$conn->close();
?>
<h1 align="center">Yes!</h1>
<h2 align="center">Successful connection is established</h2>
</body>
</html>
