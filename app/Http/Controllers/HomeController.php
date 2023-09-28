<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StoreLogin;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('homes');
    }

    public function StoreLogin()
    {
        return view('StoreLogin');
    }
    public function Stores()
    {
        return view('Stores');
    }
}
