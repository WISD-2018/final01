<?php

namespace App\Http\Controllers;

use DB;
use App\Cart;
use App\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
     public function store(Request $request)
    {
        Order::create($request->all());
        $count =  DB::table('orders')->orderby('id','Desc')->value('id');
        DB::table('orders')->where('user_id',null)->update(
            [
                'user_id'=>Auth::user()->id,
            ]
        );
        while ($row = Cart::where('user_id',Auth::user()->id)->first() != null){
            $cart = Cart::where('user_id',Auth::user()->id)->first();
            DB::table('beverage_lists')->insert(
                [
                    'number' => $cart->quantity,
                    'pname' => $cart->name,
                    'price' => $cart->cost,
                    'order_id' => $count,
                ]
            );
            Cart::where('user_id',Auth::user()->id)->first()->delete();
        }
        return redirect('/')->with('message', '訂單已送出');
}
    public function cartdetail()
    {
        $all = 0;
        $data = DB::table('carts')
            ->where('user_id', Auth::user()->id)
            ->get();
        foreach ($data as $b) {
            $all = $all + $b->total;
        }
        return view('checkout.index', ['checkout' => $data, 'a' => $all]);
    }
}
