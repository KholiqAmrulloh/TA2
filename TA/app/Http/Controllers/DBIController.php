<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DBIController extends Controller
{
    public function index()
    {
        return view('DBI.index', [
            'title' => 'Davies-Bouldin Index'
        ]);
    }
}
