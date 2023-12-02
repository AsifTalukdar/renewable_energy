<?php
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $description = $_POST["description"];
    $location = $_POST["location"];
    $funding_goal = $_POST["funding_goal"];
    $start_date = $_POST["start_date"];
    $end_date = $_POST["end_date"];

    // Insert new project into the database
    addProject($name, $description, $location, $funding_goal, $start_date, $end_date);

    // Redirect back to the main page
    header("Location: index.php");
    exit();
}
?>
