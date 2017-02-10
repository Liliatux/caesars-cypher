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
    	$message = $request->message;
    	$decalage = $request->decalage;

    	$caesar = new Caesar;
    	$caesar->title = $request->title;
    	$caesar->message = $this->cypher($message, $decalage);
    	$caesar->decalage = $request->decalage;

    	$caesar->save();

    	return redirect('/');
    }

    public function cypher($message, $decalage) {
    	$messageCypher = '';
    	for($i = 0; $i < strlen($message); $i++) {
    		$letter = substr($message, $i, 1);
    		$ascii = ord($letter) + $decalage;
    		$messageCypher .= chr($ascii);
    	}

    	return $messageCypher;
    }

    public function deleteMessage($id) {
    	$caesar = Caesar::find($id);
    	$caesar->delete();

    	return back();
    }
}
