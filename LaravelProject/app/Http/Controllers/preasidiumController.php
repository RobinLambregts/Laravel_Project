<?php

namespace App\Http\Controllers;

use App\Models\preasidiumModel;
use Illuminate\Http\Request;

class preasidiumController extends Controller
{
    public function index()
    {
        $preasidiumList = preasidiumModel::orderBy('prioriteit')->get();
        return view('preasidium', ['preasidiumList' => $preasidiumList]);
    }
}
