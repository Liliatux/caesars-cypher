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

    public function cryptMessage(Request $request) {
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
    	$crypt = '';
    	for($i = 0; $i < strlen($message); $i++) {
    		$letter = substr($message, $i, 1);
    		$ascii = ord($letter) + $decalage;
    		$crypt .= chr($ascii);
    	}

    	return $crypt;
    }

    public function deleteMessage($id) {
    	$caesar = Caesar::find($id);
    	$caesar->delete();

    	return back();
    }

    public function getMessage($id) {
    	$caesar = Caesar::find($id);

    	return view('caesars.decrypt', ['caesar' => $caesar]);
    }

    public function decryptMessage(Request $request) {
    	$caesar = Caesar::find($request->id);

    	$message = $request->message;
    	$decalage = $request->decalage;
    	$decrypt = '';

    	for($i = 0; $i < strlen($message); $i++) {
    		$letter = substr($message, $i, 1);
    		$ascii = ord($letter) - $decalage;
    		$decrypt .= chr($ascii);
    	}
    }
}
