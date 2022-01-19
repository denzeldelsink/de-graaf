<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use Illuminate\Support\Facades\DB;
use SebastianBergmann\Environment\Console;

class MenuController extends Controller
{
    //



    function list()
    {
        $data =Menu::all();
        return view('Frontend.menuview',['data'=>$data]);
    }
    function adminlist()
    {
        $data =Menu::all();
        return view('admin.menuview',['data'=>$data]);
    }
    function delete($id)
    {
        echo $id;
        DB::table('menus')->where('Id',$id)->delete();
       return redirect()->guest('admin/menu');
        
       
    }
    public function store(Request $request)
    {
        print_r($request->input());
        $naam = $request->input('naam');
        $prijs = $request->input('prijs');
        $type = $request->input('type');
        $result=DB::insert("insert into menus(Naam,Prijs,Type) values('$naam','$prijs','$type')");
        return redirect()->guest('admin/menu');
    }
}
