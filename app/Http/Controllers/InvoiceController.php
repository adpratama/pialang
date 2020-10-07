<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Invoice;
use App\Models\Quotation;
use App\Models\Insured;
use App\Models\Insurance;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Invoice::with('insureds')->get();

        return view('pages.invoice.index')->with([
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $insurances = Insurance::all();
        $insureds = Insured::all();
        return view('pages.invoice.create')->with([
            'insurances' => $insurances, 
            'insureds' => $insureds
        ]);

        // $item = Invoice::findOrFail($id);

        // return view('pages.invoice.controller')->with([
        //     'item' => $item
        // ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        Invoice::create($data);
        return redirect()->route('invoice.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Invoice::findOrFail($id);
        // $insured = Insured::all();

        return view('pages.invoice.show')->with([
            'item' => $item,
            // 'insured' => $insured
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Invoice::findOrFail($id);
        
        return view('pages.invoice.edit')->with([
            'item' => $item
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
        $item = Invoice::findOrFail($id);
        $item->update($data);

        return redirect()->route('invoice.index');
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

    public function makeinvc($id)
    {
        $item = Quotation::findOrFail($id);
        // $insureds = Insured::all();

        return view('pages.invoice.create')->with([
            'item' => $item,
            // 'insureds' => $insureds
        ]);
    }

    public function showc($id)
    {
        $item = Invoice::findOrFail($id);
        // $insured = Insured::all();

        return view('pages.invoice.showc')->with([
            'item' => $item,
            // 'insured' => $insured
        ]);
    }

}
