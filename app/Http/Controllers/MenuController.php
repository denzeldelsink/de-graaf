<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller
{
    //



    function list()
    {
        $data =Menu::all();
        return view('Frontend.menuview',['data'=>$data]);
    }
}
