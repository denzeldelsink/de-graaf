<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReserveerController extends Controller
{
    public function store(Request $request)
    {
        print_r($request->input());
        $voornaam = $request->input('voornaam');
        $achternaam = $request->input('achternaam');
        $email = $request->input('email');
        $wachtwoord = $request->input('wachtwoord');
        $result=DB::insert("insert into gebruiker(Voornaam,Achternaam,Email,Wachtwoord,Beheerder) values($voornaam,$achternaam,$email,$wachtwoord,0)");
        return redirect()->guest('/');
    }
}
