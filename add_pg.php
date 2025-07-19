<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Add PG Hostel</title>
</head>
<body>
    <h1>Add New PG Hostel</h1>
    <form action="add_pg_process.php" method="POST">
        <label for="name">Hostel Name:</label>
        <input type="text" name="name" id="name" required>
        <label for="address">Address:</label>
        <input type="text" name="address" id="address" required>
        <label for="distance">Distance from College (km):</label>
        <input type="number" step="0.01" name="distance" id="distance" required>
        <label for="contact">Contact Number:</label>
        <input type="text" name="contact" id="contact" required>
        <label for="amenities">Amenities:</label>
        <textarea name="amenities" id="amenities" required></textarea>
        <label for="rating">Rating (out of 5):</label>
        <input type="number" step="0.1" min="0" max="5" name="rating" id="rating" required>
        <button type="submit">Add Hostel</button>
    </form>
</body>
</html>