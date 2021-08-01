<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index1() {
        return view('user.index-1');
    }
    public function index2() {
        return view('user.index-2');
    }
}
