<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
        $tumkms = tumkm::all();
        return view('beranda', ['tumkms' => $tumkms]);
    }
}
