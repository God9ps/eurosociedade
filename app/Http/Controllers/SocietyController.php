<?php

namespace euromilhoes\Http\Controllers;

use Alert;
use Feeds;
use euromilhoes\Society;
use Illuminate\Http\Request;

class SocietyController extends Controller
{
    function __construct()
    {
        $this->middleware('society_admin')->only('edit');
    }

    public function getSocieties(){

        $societies = Society::with('type', 'admin')
            ->where('id_admin', auth()->user()->id)
            ->paginate(6);

        return view('pages.society.mySocieties', compact('societies'));
    }

    public function edit(Society $society)
    {
        return view('pages.society.editMySociety', compact('society'));
    }

    public function store(Request $request)
    {

        $input = $request->all();

        Society::create($input);

        alert()->success('Society created succefull!!!', 'Create Society!!!')
            ->persistent('Close');

        return view('panels');

    }
}
