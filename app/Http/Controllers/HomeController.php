<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\transaksi;
use App\barang;
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
        $users = User::all()->count();
        $orders = transaksi::count();
        $items = barang::count();
        // $a = sum($users);
        // dd($users);
        return view('home', compact('users', 'orders', 'items'));
    }
}
