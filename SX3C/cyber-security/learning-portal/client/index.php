<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Titles</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <div class="sidebar">
        <h2>Cybersecurity Topics</h2>
        <?php
        // Include the connections.php file
        require 'connections.php';

        // Query to retrieve titles and IDs from the CourseData table
        $sql = "SELECT id, topic_title FROM CourseData";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Output data of each row
            while ($row = $result->fetch_assoc()) {
                $id = $row['id'];
                $title = $row['topic_title'];

                // Create a button to load course content to the main section
                echo "<button class='course-button' onclick='loadCourseContent($id)'>$title</button><br>";
            }
        } else {
            echo "<p>No course titles available.</p>";
        }

        // Close the database connection
        $conn->close();
        ?>
    </div>

    <div class="main-content">
        <h1>Course Content</h1>
        <div id="courseContent">
            <!-- Course content will be dynamically loaded here -->
        </div>
    </div>

</div>

<script>
    function loadCourseContent(courseId) {
        // AJAX request to fetch course content and update the main section
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("courseContent").innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", "coursedetails.php?id=" + courseId, true);
        xhttp.send();
    }
</script>

</body>
</html>
