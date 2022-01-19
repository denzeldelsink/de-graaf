<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReserveerController extends Controller
{
    public function store(Request $request)
    {
        print_r($request->input());
        $naam = $request->input('name');
        $time = $request->input('time');
        $date = $request->input('date');
        $aantal = $request->input('people');
        $result=DB::insert("insert into reservering(Klantnaam,Tijd,Datum,Aantal) values('$naam','$time','$date','$aantal')");
        return redirect()->guest('/');
    }
}
