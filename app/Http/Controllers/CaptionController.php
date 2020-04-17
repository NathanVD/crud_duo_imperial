<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Caption;

class CaptionController extends Controller
{
    public function edit() {

        $captions = Caption::find(1);

        return view('admin.captions',compact('captions'));
    }

    public function update() {

        $captions = Caption::find(1);

        if (!$captions) {
            $captions = new Caption;
        }

        $captions->about = request('about');
        $captions->services = request('services');
        $captions->portfolio = request('portfolio');
        $captions->testimonials = request('testimonials');
        $captions->team = request('team');
        $captions->contact = request('contact');

        $captions->save();

        return redirect()->route('admin');
    }
}
