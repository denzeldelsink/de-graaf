<?php

namespace App\Http\Controllers;

use App\Models\Geb;
use App\Models\Gebruiker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
     return view('index');
    }
    public function list()
    {
        $data =Gebruiker::all();
        return view('admin.userview',['data'=>$data]);
    }
    public function create()
    {
            
    }
    function delete($id)
    {
        DB::table('gebruikers')->where('Id',$id)->delete();
       return redirect()->guest('gebruiker');
        
       
    }
    public function store(Request $request)
    {
        print_r($request->input());
        $voornaam = $request->input('voornaam');
        $achternaam = $request->input('achternaam');
        $email = $request->input('email');
        $wachtwoord = $request->input('wachtwoord');
        $result=DB::insert("insert into gebruikers(Voornaam,Achternaam,Email,Wachtwoord,Beheerder) values('$voornaam','$achternaam','$email','$wachtwoord','0')");
        return redirect()->guest('/');
    }
    public function check(Request $request)
    {
        print_r($request->input());
        $email = $request->input('email');
        $wachtwoord = $request->input('wachtwoord');
        $result = DB::select("select * from gebruikers WHERE Email='$email' AND Wachtwoord='$wachtwoord'");
        $result2 = DB::select("select * from gebruikers WHERE Email='$email' AND Wachtwoord='$wachtwoord' AND Beheerder ='1'");
        
        if($result){
            if($result2)
            {
                return redirect()->guest('/admin');
            }else
            {
                 return redirect()->guest('/');
            }
        }else{
            return redirect()->guest('/login')->with('verkeerde inlog gegevens');
        }
    
    }
}
