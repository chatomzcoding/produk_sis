<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function index()
    {
        $menu   = '';
        $main   = [
            'link' => ''
        ];
        return view('demo.index', compact('menu','main'));
    }
}
