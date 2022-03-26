<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ManufacturerSale;


class ManufacturerSaleController extends Controller
{

    public function index()
    {
        $manufacturer_sales = ManufacturerSale::all();
        return view('manufacturersale', compact('manufacturer_sales'));
    }


    public function create()
    {
        return view('manufacturersales.create');
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
        $manufacturersale = ManufacturerSale::create([
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
        $manufacturersale= ManufacturerSale::find($id);
        return view('manufacturersales.show',compact('manufacturer_sale'));
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
