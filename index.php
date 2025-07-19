<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Nearest PG Hostels</title>
</head>
<body>
    <h1>Find Nearest PG Hostels</h1>
    <form action="search.php" method="GET">
        <input type="text" name="location" placeholder="Enter your location" required>
        <button type="submit">Search</button>
    </form>
    <br>
    <a href="add_pg.php">Add New PG Hostel</a>
    <center><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1778.5083230584896!2d74.48059715406899!3d16.706298589714425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1752247052231!5m2!1sen!2sin" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></center>
</body>
</html>