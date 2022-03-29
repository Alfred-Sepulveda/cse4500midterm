<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManufacturerSupportCont extends Controller
{

    public function index()
    {
        $manufacturer_supports = Manufacturer::all();
        return view('manufacturersupport', compact('manufacturer_supports'));
    }


    public function create()
    {
        return view('manufacturersupports.create');
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'CompanyName' => 'required',
            'Address' => 'required',
            'PhoneNumber' => 'required',
            'ContactName' => 'required',
            'Email' => 'required',
        ]);
        $manufacturersale = ManufacturerSupport::create([
            'CompanyName' => $request->CompanyName,
            'Address' => $request->Address,
            'PhoneNumber' => $request->PhoneNumber,
            'ContactName' => $request->ContactName,
            'Email' => $request->Email,
            
        ]);
        return $this->index();

    }


    public function show($id)
    {
        $manufacturersale= ManufacturerSupport::find($id);
        return view('manufacturersupports.show',compact('manufacturersupport'));
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
