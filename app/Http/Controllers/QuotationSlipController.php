<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Placing;
use App\Models\Quotation;
use App\Models\Insured;


class QuotationSlipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $quotations = Quotation::with('insureds')->get();
        // $insured = Insured::with('insured')->get();
        // $items = ProductGallery::with('product')->get();
        return view('pages.quotation.index')->with([
            'quotations' => $quotations
            // 'insured'=>$insured
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //
        $item = Placing::findOrFail($id);

        return view('pages.quotation.create')->with([
            'item' => $item
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

        Quotation::create($data);
        return redirect()->route('quotation.index')->with('message', 'Quotation Berhasil Dibuat');
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
        $item = Quotation::findOrFail($id);
        // ->with('insureds')->get();

        return view('pages.quotation.show')->with([
            'item' => $item
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
        //
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
    public function qs($id)
    {
        $item = Placing::findOrFail($id);
        $insureds = Insured::all();
        // dd($item);
        // var_dump($item);
        return view('pages.quotation.create')->with([
            'item'=>$item,
            // 'insureds'=>$insureds
        ]);
    }
}
