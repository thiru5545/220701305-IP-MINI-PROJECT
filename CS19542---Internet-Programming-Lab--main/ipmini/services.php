<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: details.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choose Services</title>
    <link rel="stylesheet" href="styles.css">
    <style>/* Container for image and overlay */
.image-container {
    position: relative;
    width: 100%;
    height: auto;
    border-radius: 8px;
    overflow: hidden;
}

.service-img {
    width: 100%;
    height: auto;
    border-radius: 8px;
}

/* Hidden overlay with service name */
.service-overlay {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    background: rgba(0, 0, 0, 0.6); /* Semi-transparent background */
    color: white;
    text-align: center;
    padding: 20px 0;
    opacity: 0;
    transition: opacity 0.5s ease;
    border-radius: 8px;
}

/* Hover effect to show overlay */
.image-container:hover .service-overlay {
    opacity: 1;
}

/* General styles for the form */
body {
    font-family: Arial, sans-serif;
    background-color: #141414;
    margin: 0;
    padding: 0;
}

.form-container {
    width: 80%;
    max-width: 1200px;
    margin: 50px auto;
    padding: 20px;
    background: black;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    text-align: center;
}

h2 {
    margin-bottom: 30px;
}

.services-container {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
}

.service-card {
    width: 250px;
    margin: 15px;
    padding: 20px;
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    text-align: center;
    cursor: pointer;
    transition: transform 0.3s ease;
}

.service-card:hover {
    transform: scale(1.05);
}

button {
    padding: 10px 20px;
    background-color: #28a745;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    margin-top: 30px;
}

button:hover {
    background-color: #218838;
}
</style>
</head>
<body>
    <div class="form-container">
        <h2>Select Services</h2>
        <form action="details.php" method="POST" class="services-container">

            <div class="service-card">
                <input type="checkbox" id="digital-marketing" name="services[]" value="Digital Marketing">
                <label for="digital-marketing">
                    <div class="image-container">
                        <img src="varunk.jpg" alt="Digital Marketing" class="service-img">
                        <div class="service-overlay">
                            <h3>Digital Marketing</h3>
                        </div>
                    </div>
                </label>
            </div>

            <div class="service-card">
                <input type="checkbox" id="video-editing" name="services[]" value="Video Editing">
                <label for="video-editing">
                    <div class="image-container">
                        <img src="videoedit.jpeg" alt="Video Editing" class="service-img">
                        <div class="service-overlay">
                            <h3>Video Editing</h3>
                        </div>
                    </div>
                </label>
            </div>

            <button type="submit">Proceed</button>
        </form>
    </div>
</body>
</html>
