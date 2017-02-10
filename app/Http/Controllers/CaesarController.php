<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Caesar;

class CaesarController extends Controller
{
    public function getIndex() {
    	$caesars = Caesar::all();
    	return view ('index', ['caesars' => $caesars]);
    }
}
