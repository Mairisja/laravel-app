<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
     *  Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $request->user()->authorizeRoles(['admin', 'content_admin', 'user']);
        return view('home');
    }

    public function AdminStaff(Request $request)
    {
        $request->user()->authorizeRoles(['admin']);
        return view(‘admin’);
    }

    public function ContentAdminStaff(Request $request)
    {
        $request->user()->authorizeRoles(['content_admin', 'admin']);
        return view(‘content_admin’);
    }
  
}
