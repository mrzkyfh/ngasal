<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function berandaBackend()
    {
    return view('backend.vberanda.index', [
        'judul' => 'Halaman Beranda',
    ]);
    }
}
