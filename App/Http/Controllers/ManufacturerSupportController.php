<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ManufacturerSupport;


class ManufacturerSupportController extends Controller
{

    public function index()
    {
        $manufacturer_supports = ManufacturerSupport::all();
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
        $manufacturersupport = ManufacturerSupport::create([
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
        $manufacturersupport= ManufacturerSupport::find($id);
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
