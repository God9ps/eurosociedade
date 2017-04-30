<?php

namespace euromilhoes\Http\Controllers;

use euromilhoes\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    public function getTypes(){
        $types = Type::all();
        /*dd($types);*/
        /*return View::make('pages.society.newSociety')->with($types);*/
        return view('pages.society.newSociety', compact('types'));
    }
}
