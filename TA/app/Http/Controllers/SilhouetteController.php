<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SilhouetteController extends Controller
{
    public function index()
    {
        return view('Silhouette.index', [
            'title' => 'Silhouette Coefficient'
        ]);
    }
}
