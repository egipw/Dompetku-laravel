<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Dompet; //untuk meload model

class dompetController extends Controller
{
    public function index()
    {
        $dompet = Dompet::all();
        return view ('dompet/home', ['dompet' => $dompet]);
    }

    // public function show($id)
    // {
    //     $dompet = Dompet::find($id);
    //     // dd($dompet);
    //     return view('dompet/view', ['dompet' => $dompet]);
    // }

    public function edit($id)
    {
        $dompet = Dompet::find($id);
        return view('dompet/edit', ['dompet' => $dompet]);
    }

}
 