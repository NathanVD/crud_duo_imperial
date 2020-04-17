<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hero;
use Illuminate\Support\Facades\Storage;

class HeroController extends Controller
{
    public function edit()
    {
        $hero = Hero::find(1);

        return view('admin.hero', compact('hero'));
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
        $hero = Hero::find(1);

        if(!$hero){
            $hero = new Hero();
        }
        
        Storage::delete($hero->img);

        $hero->img = request('image')->store('img');

        $hero->save();

        return redirect()->route('admin');
    }
}
