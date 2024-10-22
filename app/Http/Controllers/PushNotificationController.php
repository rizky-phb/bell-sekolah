<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Minishlink\WebPush\VAPID;

class PushNotificationController extends Controller
{
    public function generateVapidKeys()
    {
        $keys = VAPID::createVAPIDKeys();

        return view('vapid', [
            'vapidPublicKey' => $keys['publicKey'],
            'vapidPrivateKey' => $keys['privateKey'],
        ]);
    }
}
