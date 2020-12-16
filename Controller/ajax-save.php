<?php
    
    $GameBPS = $_POST['BPS'];
    $GameName = $_POST['Name'];
    $GameScore = $_POST['Score'];

    $CookieGameArray = [
        "BPS" => $GameBPS,
        "Name" => $GameName,
        "Score" => $GameScore
    ];

    echo "<script>alert('{$GameName}');</script>";
    echo "SKREEE";
    
    setcookie("BPS", $GameBPS, time() + (86400 * 30), "/"); // 86400 = 1 day
    setcookie("Name", $GameName, time() + (86400 * 30), "/");
    setcookie("Score", $GameScore, time() + (86400 * 30), "/");
?>