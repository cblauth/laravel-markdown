<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class CMS extends Controller
{
    public function index(Request $request)
    {

        //print_r($companies);
        return view('cms');
    }
}
