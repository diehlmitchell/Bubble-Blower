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

    
    setcookie($CookieGameArray, time() + (86400 * 30), "/"); // 86400 = 1 day

?>