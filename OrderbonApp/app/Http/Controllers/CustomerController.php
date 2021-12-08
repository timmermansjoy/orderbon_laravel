<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class CustomerController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = DB::table('customers')->paginate(15);
        return view('pages.klanten.index', ['title' => 'klanten', 'customers' => $customers]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $klanten = new Customer();
        return view('pages.klanten.Toevoegen', compact('klanten'), ['title' => 'KlantenToevoegen']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Customer $customer
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Customer::create($this->validatedData($request));
        toast('Klant is aangemaakt','success');
        return redirect('/klanten');

        //if not want to use sweet alert
        // $request->session()->flash('success', 'Item created successfully.');
        // return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Customer $customer
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Customer $klanten)
    {
        return view("pages.klanten.Tonen", compact('klanten'), ['title' => $klanten->name]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Customer $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $klanten)
    {
        return view('pages.klanten.edit', compact('klanten'), ['title' => $klanten->name]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Customer $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $klanten)
    {
        $klanten->update($this->validatedData($request));
        toast('Klant is aangepast','success');
        return redirect('/klanten');

        //if not want to use sweet alert
        // $request->session()->flash('success', 'Item changed successfully.');
        // return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Customer $klanten
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Customer $klanten)
    {
        $klanten->delete();
        toast('product is verwijderd','success');
        return redirect('/klanten');
    }


    private function validatedData($request)
    {
        return $request->validate([
            'name' => 'required',
            'vatid' => 'required',
            'exactid' => 'required',
            'ceo_first_name' => 'nullable',
            'ceo_last_name' => 'nullable',
            'email' => 'required|email',
            'street' => 'required',
            'city' => 'required',
            'postal_code' => 'required',
            'country' => 'required|max:2',
            'phonenumber' => 'required'
        ]);
    }
}
