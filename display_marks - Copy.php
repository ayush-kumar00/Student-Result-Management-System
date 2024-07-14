<?php
$servername = "localhost";
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$dbname = "school";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch all records from the database
$sql = "SELECT * FROM grades";
$result = $conn->query($sql);

// Display records in HTML format
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<p><strong>Student Name:</strong> " . $row["student_name"] . "</p>";
        echo "<p><strong>Enrollment Number:</strong> " . $row["enrollment_number"] . "</p>";
        echo "<p><strong>Course Name:</strong> " . $row["course_name"] . "</p>";
        echo "<p><strong>Semester Number:</strong> " . $row["semester_number"] . "</p>";
        echo "<p><strong>Subject Name:</strong> " . $row["subject_name"] . "</p>";
        echo "<p><strong>Marks:</strong> " . $row["marks"] . "</p>";
        echo "<hr>";
    }
} else {
    echo "No records found";
}

$conn->close();
?>
