<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        if (url('/index-1')) {
            return view('user.index-1');
        } 

        if (url('/index-2')) {
            return view('user.index-2');
        }
    }
}
