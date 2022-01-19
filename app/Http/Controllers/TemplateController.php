<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Console\ViewCacheCommand;
use Illuminate\Http\Request;

class TemplateController extends Controller
{
  
    public function index()
    {
        return view('Frontend.home');
    }
    public function adminindex()
    {
        return view('admin.home');
    }
    public function register()
    {
        return view('Frontend.register');
    }
    public function login()
    {
        return view('Frontend.login');
    }
    public function menu()
    {
        return view('Frontend.menuview');
    }
    public function adminmenu()
    {
        return view('admin.menuview');
    }
    public function reserveer()
    {
        return view('Frontend.reserveer');
    }
    public function menuadd()
    {
        return view('admin.menuviewadd');
    }
}
