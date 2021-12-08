<?php

namespace App\Http\Controllers;

use App\Order;
use App\Customer;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::where('status', '!=' ,0)->paginate(20);
        return view('pages.orders.index', ['title' => 'orders', 'orders' => $orders]);
    }

    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $order = new Order();
        $customers = Customer::orderBy('name', 'asc')->distinct()->get();
        $products = Product::orderBy('name', 'asc')->distinct()->get();
        return view('pages.orders.Toevoegen', compact('order'), ['title' => 'OrderbonToevoegen', 'customers'=>$customers, 'products'=>$products]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param \App\Order $order
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Order::create($this->validatedData($request));
        toast($request->type.'order is aangemaakt','success');
        return redirect('/orders');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        return view("pages.orders.Tonen", compact('order'), ['title' => $order->id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        $customers = Customer::orderBy('name', 'asc')->distinct()->get();
        $products = Product::orderBy('name', 'asc')->distinct()->get();
        return view('pages.orders.edit', compact('order'), ['title' => $order->name,'customers'=>$customers, 'products'=>$products]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        $order->update($this->validatedData($request));
        toast($request->type.' is aangepast','success');
        return redirect('/orders');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        $order->delete();
        toast('order is verwijderd','success');
        return redirect()->back();
    }

    private function validatedData($request)
    {
        //convert time to decimal value
        $request->merge(['hours' => Order::convertToDecimal($request->hours)]);

        return $request->validate([
            'customer_id' => 'nullable',
            'reference' => 'required',
            'products' => 'nullable',
            'type' => 'required',
            'KM' => 'required',
            'hours' => 'required',
            'sign_first_name' => 'required',
            'sign_last_name' =>'required',
            'images' => 'nullable',
            'signiture' => 'required'
        ]);
    }
}
