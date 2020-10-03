<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Insured;
use App\Models\Client;

class InsuredController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $clients = Client::all();

        $items = Insured::all();
        return view('pages.insured.index')
        ->with([
            'items' => $items,
            'clients' => $clients
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $clients = Client::all();
        $item = 'TERT' . mt_rand(10000,99999) . mt_rand(100,999);
        return view('pages.insured.create')->with([
            'clients' => $clients,

            'item' => $item,
        ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = $request->all();

        Insured::create($data);
        return redirect()->route('insured.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $clients = Client::all();
        $item = Insured::findOrFail($id);

        return view('pages.insured.edit')->with([
            'item' => $item,
            'clients'=>$clients
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $data = $request->all();
        $item = Insured::findOrFail($id);
        $item->update($data);

        return redirect()->route('insured.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
