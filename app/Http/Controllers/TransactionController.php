<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index(Request $request)
    {
        $page = $request->query('page', 1);
        return view('transactions');
    }

    public function show($id)
    {
        return view('transactions');
    }
}
