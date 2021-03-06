<?php

namespace App\Http\Controllers;

use App\Town;
use Illuminate\Http\Request;

class TownController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $towns = Town::all();

        return view('town/list', ['towns' => $towns]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('town/add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'town' => 'required|max:255',
            'country' => 'required|max:255',
            'country_code' => 'required|max:255',
            'country_code_iso' => 'required|max:255',
        ]);

        try {
            $town = new Town();
            $town->name = $request->town;
            $town->country = $request->country;
            $town->country_code = $request->country_code;
            $town->country_iso_code = $request->country_code_iso;
            $town->save();

            return redirect('town')->with('success', 'Town created successfully!');

        } catch (\Exception $e) {
            report($e);
            return redirect('town')->with('error', 'Something unexpected has occured. Please try again later.');

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Town  $town
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Town  $town
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Town  $town
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Town  $town
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
