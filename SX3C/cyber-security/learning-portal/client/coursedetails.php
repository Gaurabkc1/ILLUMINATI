<?php
// Include the connections.php file
require 'connections.php';

// Get the course ID from the GET parameter
$courseId = $_GET['id'];

// Placeholder content retrieval logic (replace with your actual content retrieval logic)
$sql = "SELECT topic_content FROM CourseData WHERE id = $courseId";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $courseContent = $row['topic_content'];
    echo "<p>$courseContent</p>";
} else {
    echo "<p>Course content not available.</p>";
}

// Close the database connection
$conn->close();
?>
