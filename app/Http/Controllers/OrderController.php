<?php

namespace App\Http\Controllers;

use App\BreverageList;
use App\Product;
use App\Order;
use App\User;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('orders.index',['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request,$id)
    {
        $uid=Auth::id();
        $user=User::find($uid);
        $pid=Product::find($id);
        $data=['product'=> $pid];
        DB::table('orders')->insert('insert into orders (user_id, total) values (?, ?)');
        return view('order.create',['users'=> $user],$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $price=$request->input('price');
        $number=$request->input('number');
        $total = ($price * $number);
        $odid = DB::table('orders')->insertGetId(
            ['user_id' => $request->input('id'), 'total' => $total]
        );
        DB::insert('insert into orderdetails (order_id, product_id, number) values (?, ?, ?)', [$odid, $request->input('product_id'), $request->input('number')]);
        return view('/order.index');

        return view('/order.beveragelist');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(order $order)
    {
        //
    }
}
