<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlockController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function show($id)
    {
        return view('home');
    }
}
