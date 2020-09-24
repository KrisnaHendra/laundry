<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaketController extends Controller
{
    public function index(){
      return view('owner/paket');
    }

    public function tambah_view(){
      return view('owner/paket_tambah');
    }
}
