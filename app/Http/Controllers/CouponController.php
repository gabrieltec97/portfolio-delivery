<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use App\Models\Tray;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CouponController extends Controller
{
    public function index()
    {
        $coupons = Coupon::all();
        return view('Orders.Coupons', [
            'coupons' => $coupons
        ]);
    }

    public function checkCouponName(Request $request)
    {
        $name = $request->input('name');
        $id = '';
        if ($request->input('id') != ''){
            $id = $request->input('id');
        }
        $check = DB::table('coupons')
            ->select('name', 'id')->get();

        foreach ($check as $item){
            if ($id == ''){
                if ($item->name == $name){
                    return response()->json(['success' => false]);
                }
            }else{
                if ($item->name == $name && $item->id != $id){
                    return response()->json(['success' => false]);
                }
            }
        }

        return response()->json(['success' => true]);
    }

    public function store(Request $request)
    {
        $coupons = DB::table('coupons')
            ->select('name')->get();

        foreach ($coupons as $item){
            if ($item->name == strtoupper($request->name)){
                return redirect()->back()->with('msg-error', 'Já existe um cupom cadastrado com este nome.');
            }
        }

        $coupon = new Coupon();
        $coupon->name = strtoupper($request->name);
        $coupon->type = $request->aplication;
        $coupon->limit = $request->limit;
        $coupon->role = $request->role;
        $coupon->used = 0;

        if ($request->type == "Frete grátis"){
            $coupon->discount == "Frete grátis";
        }else{
            $coupon->discount = $request->discount;
        }

        if ($request->is_available == "on"){
            $coupon->status = true;
        }else{
            $coupon->status = false;
        }

        $coupon->save();
        return redirect()->back()->with('msg-store', '.');
    }

    public function apply(Request $request)
    {
        $user = Auth::user();
        $total = 0;
        $coupon = DB::table('coupons')
            ->where('name', $request->coupon)
            ->get();

        $firstTray = Tray::where('user_id', $user->id)
            ->first();

        $trays = Tray::where('user_id', $user->id)
            ->get();

        foreach ($trays as $tray){
            $total += floatval($tray->value) * floatval($tray->ammount);
        }

        if ($total > $coupon[0]->role){
            $update = Tray::find($firstTray->id);
            $update->coupon_apply = $coupon[0]->name;
            $update->save();

            return redirect()->route('review')->with('msg-coupon-applyed', '.');
        }else{
            return redirect()->route('review')->with('msg-coupon-notApplyed', 'Falha ao aplicar o cupom '.$coupon[0]->name.'. Verifique as condições de uso.');
        }
    }

    public function remove()
    {
        $user = Auth::user();
        $firstTray = Tray::where('user_id', $user->id)
            ->first();

        $update = Tray::find($firstTray->id);
        $update->coupon_apply = null;
        $update->save();

        return redirect()->route('review')->with('msg-coupon-removed', '.');
    }

    public function update(Request $request, string $id)
    {
        $coupons = DB::table('coupons')
            ->select('name', 'id')->get();

        foreach ($coupons as $item){
            if ($item->name == strtoupper($request->name) && $item->id != $id){
                return redirect()->back()->with('msg-error-upd', 'Já existe um cupom cadastrado com este nome.');
            }
        }

        $coupon = Coupon::find($id);
        $coupon->name = strtoupper($request->name);
        $coupon->type = $request->aplication;
        $coupon->limit = $request->limit;

        if ($request->type == "Frete grátis"){
            $coupon->discount == "Frete grátis";
        }else{
            $coupon->discount = $request->discount;
        }

        if ($request->is_available == "on"){
            $coupon->status = true;
        }else{
            $coupon->status = false;
        }

        $coupon->save();
        return redirect()->back()->with('msg-coupon-updated', '.');
    }

    public function destroy(string $id)
    {
        $coupon = Coupon::find($id);
        $coupon->delete();

        return redirect()->back()->with('msg-delete', '.');
    }
}
