<?php

namespace App\Http\Controllers;
use App\Models\Produk;
use App\Models\Parallax;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index() {
        $data = Produk::all();
        $parallax = Parallax::all();
        return view('welcome', compact('data','parallax'));
    }
}
