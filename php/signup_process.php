<?php
// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Decode the JSON data sent from the client
    $postData = json_decode(file_get_contents("php://input"));

    // Extract data from the decoded JSON object
    $fullname = $postData->fullname;
    $email = $postData->email;
    $password = $postData->password;

    // Validate the data (you can add more validation as needed)

    // Connect to the MySQL database
    $servername = "127.0.0.1"; // Change this to your database server name
    $username = "root"; // Change this to your database username
    $password = ""; // Change this to your database password
    $dbname = "vault_lock_system"; // Change this to your database name

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare SQL statement to insert user data into the users table
    $sql = "INSERT INTO users (fullname, email, password) VALUES ('$fullname', '$email', '$password')";

    // Execute SQL statement
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close connection
    $conn->close();
} else {
    // If the request method is not POST, return an error message
    echo "Error: Invalid request method";
}
?>
