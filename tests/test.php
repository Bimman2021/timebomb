<?php
    require __DIR__ . "/../vendor/autoload.php";

    use Tmx\Tmx;

    $tmx = new Tmx("2025-12-31"); // Set expiry date
    $tmx->enforce(); // Stop execution if expired

    echo "✅ Software is active!";
