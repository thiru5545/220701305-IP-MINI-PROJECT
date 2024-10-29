<?php
// index.php - Extended Home Page (About Us with Login/Sign Up and Contact Information)
?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            border-radius: 50%;
            background-color: black;
            color: #fff;
        }

        .navbar ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            background-color: black;
            overflow: hidden;
            text-align: right;
        }

        .navbar ul li {
            display: inline;
        }

        .navbar ul li a {
            text-decoration: none;
            padding: 14px 20px;
            display: inline-block;
            color: #fff;
        }

        .video-background {
            position: relative;
            width: 100%;
            height: 100vh;
            overflow: hidden;
        }

        #background-video {
            position: absolute;
            top: 0;
            left: 0;
            min-width: 100%;
            min-height: 100%;
            z-index: -1;
        }

        .content {
            position: relative;
            text-align: center;
            top: 50%;
            transform: translateY(-50%);
            color: #fff;
            padding: 20px;
        }

        .content h1 {
            font-size: 3em;
            margin-bottom: 20px;
        }

        .content p {
            font-size: 1.2em;
            margin-bottom: 20px;
        }

        .btn {
            background-color: #ff6600;
            padding: 10px 20px;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #e65c00;
        }

        /* Additional information section */
        .info-section {
            padding: 50px;
            background-color: #222;
            text-align: center;
        }

        .info-section h2 {
            margin-bottom: 30px;
            color: #ff6600;
        }

        .info-section p {
            font-size: 1.1em;
            line-height: 1.6;
            color: #bbb;
        }

        /* Footer section */
        .footer {
            background-color: #000;
            color: white;
            text-align: center;
            padding: 20px 0;
        }

        .footer p {
            margin: 5px 0;
        }

        .footer a {
            color: #ff6600;
            text-decoration: none;
            margin: 0 10px;
        }

        .footer a:hover {
            color: #e65c00;
        }

        .footer .social-icons img {
            width: 30px;
            height: 30px;
            margin: 0 10px;
        }

    </style>
</head>
<body>
    <!-- Navbar -->
    <div class="navbar">
        <ul>
            <li><a href="login.php">Login</a></li>
            <li><a href="signup.php">Sign Up</a></li>
        </ul>   
    </div>

    <!-- Video Background Section -->
    <div class="video-background">
        <video autoplay muted loop id="background-video">
            <source src="bg2.mp4" type="video/mp4">
        </video>
        <div class="content">
            <h1>Welcome to Our Digital Marketing and Video Editing Solutions</h1>
            <p>Founded in [Year], we offer comprehensive digital marketing and professional video editing services for both small and large-scale brands.</p>
            <button class="btn">Explore More</button>
        </div>
    </div>

    <!-- Additional Information Section -->
    <div class="info-section">
        <h2>Our Services</h2>
        <p>We specialize in end-to-end digital marketing services including social media management, SEO optimization, and paid media strategies. Our expert video editing team delivers professional content for businesses, influencers, and creative agencies alike.</p>
        <h2>Why Choose Us?</h2>
        <p>We are dedicated to helping our clients achieve measurable results through tailored digital marketing campaigns and superior video content creation. Whether you're looking to increase your online presence, boost your engagement, or deliver stunning visuals, we have the expertise to bring your vision to life.</p>
    </div>

    <!-- Footer Section -->
    <div class="footer">
        <p><strong>Contact Us:</strong></p>
        <p>Phone: +1 123-456-7890 | +1 987-654-3210 | +1 555-555-5555</p>
        <p>Email: support@example.com | info@example.com</p>
        
        <!-- Social Media Icons -->
        <div class="social-icons">
            <a href="https://instagram.com" target="_blank"><img src="ig.png" alt="Instagram"></a>
            <a href="https://facebook.com" target="_blank"><img src="facebook.png" alt="Facebook"></a>
            <a href="https://twitter.com" target="_blank"><img src="twitter.png" alt="Twitter"></a>
        </div>

        <p>&copy; [Year] Your Company. All rights reserved.</p>
    </div>
</body>
</html>
