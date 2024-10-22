<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Schedule;
use Illuminate\Http\Request;
use App\Models\User;
use App\Notifications\YourNotification;

class ScheduleController extends Controller
{
    public function index()
    {
        // Ambil user
        $user = User::find(1);

        // Kirim notifikasi
        $user->notify(new YourNotification());

        return response()->json(['status' => 'Notifikasi dikirim!']);

        //$schedules = Schedule::all();
        //return view('schedules.index', compact('schedules'));
    }
}

