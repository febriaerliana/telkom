<?php

namespace App\Http\Controllers\Frontpage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Index;

class IndexController extends Controller{
    public function index() 
    {
        return view('frontpage.index');
    }
}