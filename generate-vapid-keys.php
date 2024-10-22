<?php

require __DIR__ . '/vendor/autoload.php';
use Minishlink\WebPush\VAPID;

// Menghasilkan VAPID keys
// $keys = VAPID::generateVAPIDKeys(); // wrong it's for lower version
$keys = VAPID::createVapidKeys();
// Menampilkan kunci publik dan privat
echo 'VAPID_PUBLIC_KEY=' . $keys['publicKey'] . PHP_EOL;
echo 'VAPID_PRIVATE_KEY=' . $keys['privateKey'] . PHP_EOL;
