<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ManufacturerSale;

class ManufacturerSaleController extends Controller
{

    public function index()
    {
        $manufacturersales = ManufacturerSales::all();
        return view('manufacurersales', compact('manufacurersales'));
    }


    public function create()
    {
        return view('manufacurersales.create');
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
        $manufacturersale = ManufacturerSales::create([
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
        $manufacturersale= ManufacturerSales::find($id);
        return view('manufacurersales.show',compact('manufacurersale'));
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
