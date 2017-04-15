<?php

namespace euromilhoes\Http\Controllers;
use euromilhoes\Society;
use euromilhoes\Type;
use Illuminate\Database\Eloquent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SocietyController extends Controller
{
    public function getTypes(){
        $types = Type::all();
        /*dd($types);*/
        /*return View::make('pages.society.newSociety')->with($types);*/
        return view('pages.society.newSociety', compact('types'));
    }

    public function store(Request $request)
    {

        $input = $request->all();
        Society::create($input);

        return view('welcome');

    }
}
