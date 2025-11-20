<?php
// Retrieve form data
$soil = $_POST['soil'] ?? '';
$temp = $_POST['temperature'] ?? '';
$rain = $_POST['rainfall'] ?? '';

$crop = "";

// Simple rule-based recommendation
if ($soil == "Black Soil") {
    if ($temp >= 20 && $temp <= 35 && $rain >= 50 && $rain <= 100) {
        $crop = "Cotton";
    } else {
        $crop = "Soybean";
    }
}

else if ($soil == "Red Soil") {
    if ($temp >= 25 && $temp <= 35 && $rain >= 100) {
        $crop = "Groundnut";
    } else {
        $crop = "Millets";
    }
}

else if ($soil == "Clay Soil") {
    if ($temp >= 15 && $temp <= 25 && $rain >= 120) {
        $crop = "Rice";
    } else {
        $crop = "Wheat";
    }
}

else if ($soil == "Sandy Soil") {
    if ($temp >= 20 && $temp <= 30 && $rain <= 80) {
        $crop = "Bajra";
    } else {
        $crop = "Barley";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Crop Recommendation</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="overlay"></div>

<div class="container">
    <h1>Crop Recommendation Result</h1>

    <div class="glass-card">
        <h2>Based on your inputs:</h2>
        <p><strong>Soil Type:</strong> <?= htmlspecialchars($soil) ?></p>
        <p><strong>Temperature:</strong> <?= htmlspecialchars($temp) ?> °C</p>
        <p><strong>Rainfall:</strong> <?= htmlspecialchars($rain) ?> mm</p>

        <hr style="margin: 15px 0; border: 1px solid rgba(255,255,255,0.4);">

        <h2>Recommended Crop:</h2>
        <h1 style="color: #4CAF50;"><?= $crop ?></h1>

        <button onclick="window.history.back()" class="btn" style="margin-top:20px;">
            Go Back
        </button>
    </div>
</div>

</body>
</html>
