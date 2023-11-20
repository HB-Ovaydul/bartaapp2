<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show Home Page
     */
    public function showHomePage()
    {
        return view('frontend.pages.home.home');
    }
}
