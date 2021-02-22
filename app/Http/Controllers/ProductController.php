<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prodotti = Product::all();
        return view('product.index', compact('prodotti'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
          'titolo' => 'required|max:255',
          'descrizione' => 'required',
          'prezzo' => 'required',
        ]);
        $prodotto = new Product;
        $prodotto->titolo = $request->titolo;
        $prodotto->descrizione = $request->descrizione;
        $prodotto->prezzo = $request->prezzo;
        $prodotto->disponibilita = true;
        $prodotto->save();
        return redirect()->route('prodotti.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($product)
    {
      $prodotto = Product::find($product);

      return view ('product.show', compact('prodotto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($product)
    {
      // dd('ciao');
      $prodotto = Product::find($product);
      return view ('product.edit', compact('prodotto'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $product)
    {

        $prodotto = Product::find($product);
        $prodotto->titolo = $request->titolo;
        $prodotto->descrizione = $request->descrizione;
        $prodotto->prezzo = $request->prezzo;
        $prodotto->update();
        return redirect()->route('prodotti.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($product)
    {
        $prodotto = Product::find($product);
        $prodotto->delete();
        return redirect()->route('prodotti.index');
    }
}
