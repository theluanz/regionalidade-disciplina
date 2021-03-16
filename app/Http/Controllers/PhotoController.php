<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\Product;
use App\Models\RuralProperty;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PhotoController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, RuralProperty $ruralProperty, Product $product)
    {
        $file = $request->photo;
        $filename = time()  . '.' . $file->extension();
        $fileStorage = $file->storeAs('public',$filename);
        $photo = $product->photos()->create(
            ['url'=>$filename]
        );
        return back();
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(RuralProperty $ruralProperty, Product $product, Photo $photo)
    {
        Storage::delete('public/'.$photo->url);
        $photo->delete();
        return back();
    }
}
