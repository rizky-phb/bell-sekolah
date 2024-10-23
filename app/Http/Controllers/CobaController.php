<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Tambahkan ini agar DB bisa dikenali

class CobaController extends Controller
{
    public function index()
    {
        $schedules = DB::table('schedules')
    ->join('class_subject_schedule', 'schedules.id', '=', 'class_subject_schedule.schedule_id')
    ->join('classes', 'class_subject_schedule.class_id', '=', 'classes.id')
    ->join('subjects', 'class_subject_schedule.subject_id', '=', 'subjects.id')
    ->select('schedules.hari', 'schedules.start_time', 'schedules.end_time', 'schedules.jam_ke', 'classes.nama', 'subjects.kode_pelajaran')
    ->where('schedules.hari', 'Senin')
    ->orderBy('schedules.jam_ke')
    ->get();

        return view('index',compact('schedules')); 
    }

    public function gallery()
    {
        return view('pages.gallery');
    }

    public function portfolio()
    {
        return view('pages.portfolio');
    }

    public function fullWidth()
    {
        return view('pages.full-width');
    }

    public function sidebarLeft()
    {
        return view('pages.sidebar-left');
    }

    public function sidebarLeft2()
    {
        return view('pages.sidebar-left-2');
    }

    public function sidebarRight()
    {
        return view('pages.sidebar-right');
    }

    public function sidebarRight2()
    {
        return view('pages.sidebar-right-2');
    }

    public function basicGrid()
    {
        return view('pages.basic-grid');
    }
}
