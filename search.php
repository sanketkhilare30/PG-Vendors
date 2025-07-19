<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Search Results</title>
</head>
<body>
    <h1>Search Results</h1>
    <?php
    if (isset($_GET['location'])) {
        $location = $_GET['location'];
        $sql = "SELECT * FROM hostels WHERE address LIKE '%$location%' ORDER BY distance_from_college ASC";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div>";
                echo "<h2>" . $row['name'] . "</h2>";
                echo "<p>Address: " . $row['address'] . "</p>";
                echo "<p>Distance: " . $row['distance_from_college'] . " km</p>";
                echo "<p>Contact: " . $row['contact_number'] . "</p>";
                echo "<p>Amenities: " . $row['amenities'] . "</p>";
                echo "<p>Rating: " . $row['rating'] . "/5</p>";
                echo "</div>";
            }
        } else {
            echo "<p>No hostels found.</p>";
        }
    }
    ?>
</body>
</html>
