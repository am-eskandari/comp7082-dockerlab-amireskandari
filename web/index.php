<?php
$servername = "db";
$username = "am-eskandari";
$password = "2314";
$dbname = "labdb"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query the 'student' table instead of 'mytable'
$sql = "SELECT * FROM student";
$result = $conn->query($sql);

echo "<h1>Database Content:</h1>";
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. " - Student ID: " . $row["student_id"] . "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
