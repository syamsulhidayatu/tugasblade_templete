<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BladeController extends Controller
{
    public function index()
    {
        $fruits = array(
            0 => 'bangke',
            1 => 'naga',
            2 => 'jambu',
            3 => 'gedang',

        );

        $name = array(
            0 => 'ilham'
        );
        return view('pages.home', compact('name', 'fruits'));
    }
    public function about()
    {
        return view('pages.about');
    }
    public function contact()
    {
        return view('pages.contact');
    }
}
