<?php

namespace App\Http\Controllers;

use App\Models\Geb;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
     return view('index');
    }
    public function create()
    {
            
    }
    public function store(Request $request)
    {
        print_r($request->input());
        $voornaam = $request->input('voornaam');
        $achternaam = $request->input('achternaam');
        $email = $request->input('email');
        $wachtwoord = $request->input('wachtwoord');
        $result=DB::insert("insert into gebruiker(Voornaam,Achternaam,Email,Wachtwoord,Beheerder) values('$voornaam','$achternaam','$email','$wachtwoord','0')");
        return redirect()->guest('/');
    }
    public function check(Request $request)
    {
        print_r($request->input());
        $email = $request->input('email');
        $wachtwoord = $request->input('wachtwoord');
        $result = DB::select("select * from Gebruiker WHERE Email=$email AND Wachtwoord=$wachtwoord");
        if($result){
            return redirect()->guest('/');
        }else{
            return redirect()->guest('/login')->with('verkeerde inlog gegevens');
        }
    
    }
}
