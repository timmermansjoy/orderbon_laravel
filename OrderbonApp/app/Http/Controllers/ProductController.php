<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $producten = DB::table('products')->where('status', '!=' ,0)->paginate(15);
        return view('pages.producten.index', ['title' => 'producten', 'producten' => $producten]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $producten = new Product();
        return view('pages.producten.Toevoegen', compact('producten'), ['title' => 'ProductToevoegen']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Product $producten
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Product::create($this->validatedData($request));
        toast('product is aangemaakt','success');
        return redirect('/producten');

        //if not want to use sweet alert
        // $request->session()->flash('success', 'Item created successfully.');
        // return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Product $producten
     * @return \Illuminate\Http\Response
     */
    public function show(Product $producten)
    {
        return view("pages.producten.Tonen", compact('producten'), ['title' => $producten->name]);
    }

    /**
     * Show the form for editing the specified resource.
     * @param \Illuminate\Http\Request $request
     * @param \App\Product $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Product $producten)
    {
        return view('pages.producten.edit', compact('producten'), ['title' => $producten->name]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Product $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $producten)
    {
        $producten->update($this->validatedData($request));
        toast('product is aangepast','success');
        return redirect('/producten');

        // $request->session()->flash('success', 'Item changed successfully.');
        // return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Product $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $producten)
    {
        $producten->delete();
        toast('product is verwijderd','success');
        return redirect('/producten');
    }


    private function validatedData($request)
    {
        return $request->validate([
            'name' => 'required',
            'SKU' => 'required',
            'exactid' => 'nullable',
            'exact_ref_nr' => 'nullable',
            'ceo_last_name' => 'nullable',
            'unit' => 'required',
            'description' => 'nullable',
            'stockLocation' => 'nullable'
        ]);
    }
}
