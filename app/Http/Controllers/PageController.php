<?php

namespace App\Http\Controllers;

use App\Models\mahasiswa;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome(){
        $mahasiswa = mahasiswa::orderBy('nim', 'ASC')->get();
        return view('welcome', compact('mahasiswa'));
    }

    public function main(){
        $mahasiswa = mahasiswa::all();
        return view('main/index', compact('mahasiswa'));
    }
}
