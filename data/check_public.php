<?php
require __DIR__.'/vendor/autoload.php';
$app = require __DIR__.'/bootstrap/app.php';
echo $app->make('path.public') . PHP_EOL;
echo (file_exists($app->make('path.public').'/build/manifest.json') ? 'OK' : 'MISSING') . PHP_EOL;
