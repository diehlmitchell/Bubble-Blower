<?php
    
    $GameBPS = $_POST['BPS'];
    $GamePowerup = $_POST['Powerup'];
    $GameName = $_POST['Name'];
    $GameScore = $_POST['Score'];

    $CookieGameArray = [
        "BPS" => $GameBPS,
        "Powerup" => $GamePowerup,
        "Name" => $GameName,
        "Score" => $GameScore
    ];

    echo "<script>alert('SKREEE');</script>";
    echo "SKREEE";
    
    setcookie("BPS", $GameBPS, time() + (86400 * 30), "/"); // 86400 = 1 day
    setcookie("Name", $GameName, time() + (86400 * 30), "/");
    setcookie("Score", $Score, time() + (86400 * 30), "/");
?>