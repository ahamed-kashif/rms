<?php

namespace App\Http\Controllers;

use App\Models\Balance;
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $balance = 0;
        if(count(Balance::all()) > 0){
            $balance = Balance::orderBy('updated_at', 'desc')->first()->balance;
        }

        return view('home')->with([
            'balance' => $balance
        ]);
    }
}
