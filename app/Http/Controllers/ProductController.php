<?php

namespace App\Http\Controllers;


use App\Models\Product;
use App\Models\RuralProperty;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(RuralProperty $ruralProperty)
    {        
        $products = $ruralProperty->products()->paginate();
        return view('products.index',compact(
            'products',
            'ruralProperty'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(RuralProperty $ruralProperty)
    {
        $product = new Product();
        return view('products.create',compact(
            'product',
            'ruralProperty'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, RuralProperty $ruralProperty)
    {
        $user = Auth::user();
        $data = $request->all();        
        $data['rural_property_id'] = $ruralProperty->id;
        $product = $user->products()->create($data);
        return redirect()->route('rural-properties.products.show',[
            'rural_property' => $ruralProperty,
            'product'=>$product
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(RuralProperty $ruralProperty, Product $product)
    {
        return view('products.show',compact(
            'product',
            'ruralProperty'
        ));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(RuralProperty $ruralProperty , Product $product)
    {        
        return view('products.create',compact(
            'product',
            'ruralProperty'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RuralProperty $ruralProperty , Product $product)
    {
        $product->user()->associate(Auth::user());
        $product->fill($request->all())->save();                
        return redirect()->route('rural-properties.products.show',[
            'rural_property'=>$ruralProperty,
            'product'=>$product
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(RuralProperty $ruralProperty, Product $product)
    {
        $product->delete();
        return redirect()->route('rural-properties.products.index',[
            'rural_property'    => $ruralProperty
        ]);
    }
}
