<?php 
$servername = "localhost";
$username = "root";
$password = "";
$databasename = "mybb";

// Connecting to the database
$conn = new mysqli($servername, $username, $password, $databasename);

// Checking the connection
if ($conn->connect_error) {
    die("Error connecting to the database: " . $conn->connect_error);
}

// Create the table if it doesn't exist
$tableSql = "CREATE TABLE IF NOT EXISTS MYTABLE (
    Id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL
)";

if (!$conn->query($tableSql)) {
    die("Error creating table: " . $conn->error);
}

// Getting the value of email and password
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $email = $_POST['email-name'];
    $password = $_POST['password'];

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Insert data using prepared statements
    $stmt = $conn->prepare("INSERT INTO MYTABLE (email, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $email, $hashedPassword);

    if ($stmt->execute()) {
        include ('./index.php');
    } else {
        echo "Error inserting data: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Error: Invalid request method";
}

$conn->close();
?>
