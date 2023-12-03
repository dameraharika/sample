<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
    <!-- Add your styles or use an external stylesheet -->
</head>
<body>
    <div class="thank-you-container">
        <h1>Thank You for Joining!</h1>
        <p>We appreciate your participation.</p>

        <?php
        // Assuming you have a database connection here
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "event";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Retrieve data from the last inserted record
        $sql = "SELECT * FROM students ORDER BY id DESC LIMIT 1"; // Change 'students' to your actual table name
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            echo "<p>Name: " . $row["name"] . "</p>";
            echo "<p>Roll Number: " . $row["roll_number"] . "</p>";
            echo "<p>Fun Fact: " . $row["fun_fact"] . "</p>";
        } else {
            echo "No data found.";
        }

        // Close the database connection
        $conn->close();
        ?>

        <!-- Additional content or links can be added here -->
    </div>
</body>
</html>
