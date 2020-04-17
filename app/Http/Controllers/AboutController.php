<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    public function edit()
    {
        $about = About::find(1);

        return view('admin.about', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $about = About::find(1);

        if(!$about){
            $about = new About();
        }

        if(request('image')){
            Storage::delete($about->img);
            $about->image = request('image')->store('img');
        }

        $about->titre = request('titre');
        $about->description1 = request('description1');
        $about->description2 = request('description2');
        $about->description3 = request('description3');

        $about->save();

        return redirect()->route('admin');
    }
}
