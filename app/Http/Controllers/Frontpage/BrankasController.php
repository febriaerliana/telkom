<?php

namespace App\Http\Controllers\Frontpage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Brankas;

class BrankasController extends Controller
{
    public function index() 
    {
        $brankas = Brankas::all();
        return view('frontpage.brankas')->with([
            'brankas' => $brankas
        ]);
    }

    public function create() 
    {
        return view('frontpage.brankas-create');
    }
}

