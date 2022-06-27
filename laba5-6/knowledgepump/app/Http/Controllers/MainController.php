<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Info;


class MainController extends Controller
{
    public function home(){
		return view('home');
	}
    public function about(){
		return view('about');
	}
	public function contacts(){
		return view('contacts');
	}
	public function Directions(){
		return view('Directions');
	}
	public function client(){
        return view('client');
    }
	public function client_check(Request $request){
        $valid = $request->validate([
            'name' => 'required  ',
            'tel' => 'required|min:10|max:13',
        ]);
		$lead = new Info();
        $lead->name = $request->input('name');
        $lead->tel = $request->input('tel');
        $lead->save();
		return redirect()->route('client');
    }
	
}