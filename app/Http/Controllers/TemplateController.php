<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemplateController extends Controller
{
  
    public function index()
    {
        return view('Frontend.home');
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
}
