<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function initiateHomepage()
    {
        return view('homepage.index');
    }
}
