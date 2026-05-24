<?php
// 1. Database Configuration
$host     = "localhost";
$username = "root";      // Default XAMPP username
$password = "";          // Default XAMPP password is empty
$dbname   = "portfolio_db";

// 2. Create Connection
$conn = new mysqli($host, $username, $password, $dbname);

// 3. Check Connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// 4. Get Data from the Form (Using POST)
// mysqli_real_escape_string prevents "SQL Injection" hacking
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = mysqli_real_escape_string($conn, $_POST['user_name']);
    $email   = mysqli_real_escape_string($conn, $_POST['user_email']);
    $message = mysqli_real_escape_string($conn, $_POST['user_message']);

    // 5. SQL Query to Insert Data
    $sql = "INSERT INTO messages (name, email, message) 
            VALUES ('$name', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        // Success Message
        echo "<div style='text-align:center; margin-top:50px; font-family:sans-serif;'>
                <h2>Message Sent Successfully!</h2>
                <p>Thank you, $name. I will get back to you at $email shortly.</p>
                <a href='index.html' style='color:#3498db;'>Go back to Portfolio</a>
              </div>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// 6. Close Connection
$conn->close();
?>
