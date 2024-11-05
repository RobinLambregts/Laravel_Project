<?php

namespace App\Http\Controllers;

use App\Models\evenementenModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class evenementenController extends Controller
{
    public function index()
    {
        $evenementenList = evenementenModel::all();
        return view('evenementen', ['evenementenList' => $evenementenList]);
    }

    public function addEvent(Request $request)
    {
        $evenement = new evenementenModel;
        $evenement->naam = $request->naam;
        $evenement->datum = $request->datum;
        $evenement->locatie = $request->locatie;
        $evenement->save();
        return redirect('/evenementen');
    }

    public function deleteEvent(Request $request)
    {
        DB::table('evenementen')->where('naam', '=', $request->naam)->delete();
        return redirect('evenementen');
    }

    public function updateEvent(Request $request)
    {
        DB::table('evenementen')->where('naam', '=', $request->naam)->update(['locatie' => $request->newLocation]);
        return redirect('evenementen');
    }
}
