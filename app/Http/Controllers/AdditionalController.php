<?php

namespace App\Http\Controllers;

use App\Models\Additional;
use Illuminate\Http\Request;

class AdditionalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $registereds = Additional::all();
        return view('Products.Additionals.newAdditional', ['registereds' => $registereds]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $additional = new Additional();
        $additional->name = $request->name;
        $additional->benefitedProduct = $request->product;
        $additional->price = $request->price;

        if ($request->is_available == "on"){
            $additional->is_available = true;
        }else{
            $additional->is_available = false;
        }

        $additional->save();

        return redirect()->back();

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $additional = Additional::find($id);
        $additional->name = $request->name;
        $additional->benefitedProduct = $request->product;
        $additional->price = $request->price;

        if ($request->is_available == "on"){
            $additional->is_available = true;
        }else{
            $additional->is_available = false;
        }
        $additional->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
