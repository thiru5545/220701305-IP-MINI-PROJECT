<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: transaction.php');
    exit();
}

$total_amount = 0;
$selected_services = $_SESSION['services'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $digital_marketing_services = isset($_POST['digital_marketing']) ? $_POST['digital_marketing'] : [];
    $_SESSION['digital_marketing'] = $digital_marketing_services;

    foreach ($digital_marketing_services as $service) {
        switch ($service) {
            case 'SEO':
                $total_amount += 500;
                break;
            case 'Social Media':
                $total_amount += 1000;
                break;
            case 'Content Marketing':
                $total_amount += 750;
                break;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Services</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #141414; /* Dark background for Netflix theme */
            color: white;
            margin: 0;
            padding: 0;
        }

        .form-container {
            width: 80%;
            max-width: 1200px;
            margin: 50px auto;
            padding: 20px;
            background: rgba(0, 0, 0, 0.85);
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            text-align: center;
        }

        h2 {
            margin-bottom: 30px;
        }

        .service-details {
            margin: 20px 0;
        }

        .total-amount {
            font-size: 1.5em;
            margin-top: 20px;
        }

        button {
            padding: 10px 20px;
            background-color: #e50914; /* Netflix red */
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 30px;
        }

        button:hover {
            background-color: #f40612;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Service Preview</h2>
        <div class="service-details">
            <h3>Selected Services:</h3>
            <?php foreach ($selected_services as $service): ?>
                <p><?php echo $service; ?></p>
            <?php endforeach; ?>
        </div>

        <div class="service-details">
            <h3>Digital Marketing Services:</h3>
            <?php if (isset($_SESSION['digital_marketing'])): ?>
                <?php foreach ($_SESSION['digital_marketing'] as $service): ?>
                    <p><?php echo $service; ?></p>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>

        <div class="total-amount">
            <h3>Total Amount: Rs <?php echo $total_amount; ?></h3>
        </div>

        <form action="transaction.php" method="POST">
            <button type="submit">Proceed to Payment</button>
        </form>
    </div>
</body>
</html>
