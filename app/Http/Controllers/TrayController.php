<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Tray;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TrayController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('Orders.Menu', [
            'products' => $products
        ]);
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
        $item = Product::find($request->productId);
        $user = Auth::user();

        //Verificação se o novo item adicionado existe na tabela.
        $hasTray = DB::table('trays')->where('user_id','=', $user->id)->get();

        if (count($hasTray) == 0){
            $addTray = new Tray();
            $addTray->user_id = $user->id;
            $addTray->product = $item->name;
            $addTray->value = $item->price;
            $addTray->ammount = $request->ammount;
            $addTray->product_id = $item->id;
            $addTray->save();
        } else {
            $exist = false;
            foreach ($hasTray as $trayItem){
                if ($trayItem->product == $item->name){
                    DB::table('trays')
                        ->where('user_id','=', $user->id)
                        ->where('product','=', $item->name)
                        ->update(['ammount' => $trayItem->ammount += $request->ammount]);

                    DB::table('trays')
                        ->where('user_id','=', $user->id)
                        ->where('product','=', $item->name)
                        ->update(['value' => floatval($trayItem->value) + (floatval($item->price) * floatval($request->ammount))]);

                    $exist = true;
                }
            }
        if ($exist == false){
            $addTray = new Tray();
            $addTray->user_id = $user->id;
            $addTray->product = $item->name;
            $addTray->value = $item->price;
            $addTray->ammount = $request->ammount;
            $addTray->product_id = $item->id;
            $addTray->save();
        }
        }
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
        $tray = Tray::find($id);

        if ($request->ammount != 0){
            $item = Product::find($tray->product_id);
            $tray->value = floatval($request->ammount) * floatval($item->price);
            $tray->ammount = $request->ammount;
            $tray->save();
        }else{
            $tray->delete();
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = Auth::user();
        $item = Tray::find($id);
        $item->delete();

        $check = DB::table('trays')
            ->where('user_id', $user->id)
            ->count();

        if ($check == 0){
            return redirect(route('cardapio.index'));
        }else{
            return redirect()->back();
        }
    }
}
