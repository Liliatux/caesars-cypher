<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Caesar;

class CaesarController extends Controller
{
    public function getIndex() {
    	$caesars = Caesar::all();
    	return view ('caesars.index', ['caesars' => $caesars]);
    }

    public function postMessage(Request $request) {
    	$caesar = new Caesar;
    	$caesar->title = $request->title;
    	$caesar->message = $request->message;
    	$caesar->decalage = $request->decalage;

    	$caesar->save();

    	return redirect('/');
    }
}
