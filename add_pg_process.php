<?php
include 'db.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $distance = $_POST['distance'];
    $contact = $_POST['contact'];
    $amenities = $_POST['amenities'];
    $rating = $_POST['rating'];
    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO hostels (name, address, distance_from_college, contact_number, amenities, rating) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssdsds", $name, $address, $distance, $contact, $amenities, $rating);
    if ($stmt->execute()) {
        echo "New hostel added successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
}
$conn->close();
?>
<a href="index.php">Go back to Home</a>