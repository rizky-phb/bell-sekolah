<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Minishlink\WebPush\VAPID;

class PushNotificationController extends Controller
{
    public function generateVapidKeys()
    {
        $keys = VAPID::generateVAPIDKeys();

        return view('index', [
            'vapidPublicKey' => $keys['publicKey'],
            'vapidPrivateKey' => $keys['privateKey'],
        ]);
    }
}
