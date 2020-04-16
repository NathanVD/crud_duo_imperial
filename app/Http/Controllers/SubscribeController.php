<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subscribe;

class SubscribeController extends Controller
{
    public function edit() {

        $prevLink = Subscribe::find(1);

        return view('admin.subscribe',compact('prevLink'));
    }

    public function update() {

        $subscribe = Subscribe::find(1);

        if (!$subscribe) {
            $subscribe = new Subscribe;
        }

        $subscribe->link = request('link');

        $subscribe->save();

        return redirect()->route('admin');
    }
}
