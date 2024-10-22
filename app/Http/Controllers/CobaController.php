<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CobaController extends Controller
{
    public function index()
    {
        return view('index');
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
