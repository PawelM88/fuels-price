<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\diesels;
use App\Http\Requests\ValidationRequest;

class DieselsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $diesels = diesels::all();

        return view('diesel.index')->with('diesels', $diesels);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('diesel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidationRequest $request)
    {
        $request->validated();

        $diesels = diesels::create([
            'oil_value' => $request->input('oil'),
            'pln_value' => $request->input('pln'),
            'vat_value' => $request->input('vat')
        ]);

        return redirect('/diesel/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $diesels = diesels::all();
        return view('diesel.show')->with('diesels', $diesels);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $diesels = diesels::find($id);

        return view('diesel.edit')->with('diesels', $diesels);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ValidationRequest $request, $id)
    {
        $request->validated();

        $diesels = diesels::where('id', $id)
            ->update([
                'oil_value' => $request->input('oil'),
                'pln_value' => $request->input('pln'),
                'vat_value' => $request->input('vat')
            ]);

        return redirect('/diesel/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(diesels $diesels, $id)
    {
        $diesels = diesels::where('id', $id)->delete();
        return redirect('/');
    }
}
