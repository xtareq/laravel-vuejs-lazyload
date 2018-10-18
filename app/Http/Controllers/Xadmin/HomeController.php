<?php

namespace App\Http\Controllers\Xadmin;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{

    protected $redirectTo = '/xadmin/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('xadmin.auth:xadmin');
    }

    /**
     * Show the Xadmin dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('xadmin.home');
    }

}