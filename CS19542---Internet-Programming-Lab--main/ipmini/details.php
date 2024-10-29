<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: view.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $selected_services = $_POST['services'];
    $_SESSION['services'] = $selected_services;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Details</title>
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
    background-color: black;
    margin: 0;
    padding: 0;
}

.form-container {
    width: 80%;
    max-width: 1200px;
    margin: 50px auto;
    padding: 20px;
    background: #1414;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    text-align: center;
}

h2 {
    margin-bottom: 30px;
}

h4 {
    margin: 20px 0;
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
    background: black;
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

textarea {
    width: 100%;
    height: 100px;
    margin: 20px 0;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}
</style>
</head>
<body>
    <div class="form-container">
        <h2>Provide More Details</h2>
        <form action="view.php" method="POST">
            <?php foreach ($_SESSION['services'] as $service): ?>
                <h3><?php echo $service; ?></h3>

                <?php if ($service == "Digital Marketing"): ?>
                    <h4>Choose Types of Digital Marketing:</h4>
                    <div class="services-container">
                        <div class="service-card">
                            <input type="checkbox" id="seo" name="digital_marketing[]" value="SEO">
                            <label for="seo">
                                <div class="image-container">
                                    <img src="varunk.jpg" alt="SEO" class="service-img">
                                    <div class="service-overlay">
                                        <h3>SEO</h3>
                                    </div>
                                </div>
                            </label>
                        </div>

                        <div class="service-card">
                            <input type="checkbox" id="social-media" name="digital_marketing[]" value="Social Media">
                            <label for="social-media">
                                <div class="image-container">
                                    <img src="varunk.jpg" alt="Social Media" class="service-img">
                                    <div class="service-overlay">
                                        <h3>Social Media Marketing</h3>
                                    </div>
                                </div>
                            </label>
                        </div>

                        <div class="service-card">
                            <input type="checkbox" id="content-marketing" name="digital_marketing[]" value="Content Marketing">
                            <label for="content-marketing">
                                <div class="image-container">
                                    <img src="varunk.jpg" alt="Content Marketing" class="service-img">
                                    <div class="service-overlay">
                                        <h3>Content Marketing</h3>
                                    </div>
                                </div>
                            </label>
                        </div>

                        <!-- Add more digital marketing services as needed -->
                    </div>
                <?php endif; ?>

                <textarea name="details[<?php echo $service; ?>]" placeholder="Provide more details about <?php echo $service; ?>" required></textarea><br>
            <?php endforeach; ?>
            <button type="submit">Preview</button>
        </form>
    </div>
</body>
</html>
