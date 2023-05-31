
<?php
// Database connection settings
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "book_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$location = $_POST['location'];
$guests = $_POST['guests'];
$arrivals = $_POST['arrivals'];
$leaving = $_POST['leaving'];

// Insert data into the database
$sql = "INSERT INTO bookings (name, email, phone, address, location, guests, arrivals, leaving)
VALUES ('$name', '$email', '$phone', '$address', '$location', '$guests', '$arrivals', '$leaving')";

if ($conn->query($sql) === TRUE) {
    echo "Booking successfully submitted!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


//confirmation Email

// Close the connection
$conn->close();
?>
    
