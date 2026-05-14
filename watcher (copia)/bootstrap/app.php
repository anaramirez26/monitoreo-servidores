<?php
// bootstrap/app.php
//Libreria:
use Illuminate\Foundation\Application;

$app = new Application(
    $_ENV['APP_BASE_PATH'] ?? dirname(__DIR__)
);

// ...existing code for binding interfaces...

return $app;
