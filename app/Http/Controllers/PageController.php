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
    public function index3() {
        return view('user.index-3');
    } 
    public function index4() {
        return view('user.index-4');
    }
    public function index5() {
        return view('user.index-5');
    }
}
