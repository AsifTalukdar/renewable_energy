<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "renewable_energy";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to fetch all projects from the database
function getProjects() {
    global $conn;
    $projects = array();

    $sql = "SELECT * FROM projects";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $projects[] = $row;
        }
    }

    return $projects;
}

// Function to add a new project to the database
function addProject($name, $description, $location, $funding_goal, $start_date, $end_date) {
    global $conn;

    $sql = "INSERT INTO projects (name, description, location, funding_goal, start_date, end_date)
            VALUES ('$name', '$description', '$location', '$funding_goal', '$start_date', '$end_date')";

    $conn->query($sql);
}
?>