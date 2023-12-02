<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Project</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="add_project.php">Add Project</a></li>
        </ul>
    <h1>Add New Project</h1>

    <form action="add_project_process.php" method="post">
        <label for="name">Project Name:</label>
        <input type="text" name="name" required><br>

        <label for="description">Description:</label>
        <textarea name="description" rows="4" required></textarea><br>

        <label for="location">Location:</label>
        <input type="text" name="location"><br>

        <label for="funding_goal">Funding Goal:</label>
        <input type="text" name="funding_goal" required><br>

        <label for="start_date">Start Date:</label>
        <input type="date" name="start_date"><br>

        <label for="end_date">End Date:</label>
        <input type="date" name="end_date"><br>

        <input type="submit" value="Add Project">
    </form>
</body>
</html>
