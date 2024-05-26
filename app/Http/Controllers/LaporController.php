<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporController extends Controller
{
    public function index(){
        return view('tabel_laporan');
    }
    public function detail(){
        return view('detail_laporan');
    }
}
