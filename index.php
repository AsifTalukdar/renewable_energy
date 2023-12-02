<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Renewable Energy Projects</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="add_project.php">Add Project</a></li>
        </ul>
    <h1>Renewable Energy Projects</h1>
    <hr>
    
        
    
    
    <?php
        // Include database connection file
        include 'db_connection.php';

        // Fetch and display projects from the database
        $projects = getProjects();
        foreach ($projects as $project) {
            echo "<style>.content{border-bottom: 1px solid black; width: 800px;} .gap {height: 30px;}</style>";
            echo "<div class='content'>";
            echo "<h2>{$project['name']}</h2>";
            echo "<p>{$project['description']}</p>";
            echo "<p>Location: {$project['location']}</p>";
            echo "<p>Funding Goal: {$project['funding_goal']}</p>";
            echo "<p>Current Funding: {$project['current_funding']}</p>";
            echo "<p>Start Date: {$project['start_date']}</p>";
            echo "<p>End Date: {$project['end_date']}</p>";
            echo "</div><div class='gap'></div>";
        }
    ?>
   
</body>
</html>