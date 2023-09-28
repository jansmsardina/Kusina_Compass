<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stores;
use App\Models\contactUs;
use App\Models\About;
class LandingPageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     // Remove the authentication middleware here.
    //     $this->middleware('auth');
    // }
   

    public function About()
    {
        return view('About');
    }

    public function contactUs()
    {
        return view('contactUs');
    }

    public function Stores()
    {
        return view('Stores');
    }

    public function Home()
    {
        return view('Home');
    }

}
