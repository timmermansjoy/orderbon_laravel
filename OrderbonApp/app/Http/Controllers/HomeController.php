<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

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
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $customersCount = DB::table('customers')->count();
        $ordersCount = DB::table('orders')->count();
        $productsCount = DB::table('products')->count();
        $orders = \App\Order::where('status', '!=' ,0)->paginate(20);

        return view('dashboard',[
        'title' => 'orders',
        'customersCount'=>$customersCount,
        'ordersCount'=>$ordersCount,
        'productsCount'=>$productsCount,
        'orders'=>$orders
        ]);
    }
}
