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
    $product_name = $_POST['product_name'];
    $category = $_POST['category'];
    $manufacturing_date = $_POST['manufacturing_date'];
    $stmt = $conn->prepare("INSERT INTO products ( product_name, category, manufacturing_date) VALUES ( ?, ?, ?)");
    $stmt->bind_param("sss", $product_name, $category, $manufacturing_date);
    if ($stmt->execute()) {
        echo "Product added successfully!";
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
