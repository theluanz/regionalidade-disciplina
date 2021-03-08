<?php

namespace App\Http\Controllers;

use App\Models\RuralProperty;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RuralPropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $user= Auth::user();
      $ruralProperties = $user->ruralProperties()->paginate();
      return view('rural-properties.index', compact('ruralProperties'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ruralProperty = new RuralProperty();

        return view('rural-properties.create', 
          compact('ruralProperty'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        $ruralProperty = $user->ruralProperties()->create($request->all());
        return redirect('rural-properties.show', ['ruralProperty'=>$ruralProperty]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RuralProperty  $ruralProperty
     * @return \Illuminate\Http\Response
     */
    public function show(RuralProperty $ruralProperty)
    {
      return view('rural-properties.show',compact(
        'ruralProperty'
    ));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RuralProperty  $ruralProperty
     * @return \Illuminate\Http\Response
     */
    public function edit(RuralProperty $ruralProperty)
    {
      return view('rural-properties.create',compact(
        'ruralProperty'
    ));    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RuralProperty  $ruralProperty
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RuralProperty $ruralProperty)
    {
      $ruralProperty->user()->associate(Auth::user());
      $ruralProperty->fill($request->all())->save();        
      return redirect()->route('rural-properties.show',['ruralProperty'=>$ruralProperty]);    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RuralProperty  $ruralProperty
     * @return \Illuminate\Http\Response
     */
    public function destroy(RuralProperty $ruralProperty)
    {
      $ruralProperty->delete();
      return redirect()->route('rural-properties.index');    }
}
