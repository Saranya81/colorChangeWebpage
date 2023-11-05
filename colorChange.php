<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "color_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get username and color name from POST request
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $colorName = $_POST["colorName"];

    // Insert data into the database
    $sql = "INSERT INTO user_colors (username, selected_color) VALUES ('$username', '$colorName')";

    if ($conn->query($sql) === TRUE) {
        echo "Color preference updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
