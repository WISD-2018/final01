<?php

namespace App\Http\Controllers;

use App\BeverageList;
use App\Order;
use App\Product;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class BeverageListController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user=Auth::user()->id;
        $BeverageList = Order::where('user_id', $user)
        ->select('BeverageList.id','carts.cs_id','graphiccard.gc_name','carts.price','carts.qy')
        ->orderBy('id','ASC')
        ->get();
        $data=['carts' => $cart];

        return view('orders.BeverageList', $data);
    }

    public function removeItem($id){

        CartItem::destroy($id);
        return redirect('/BeverageList');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $user=Auth::user()->id;
        $pid=$request->input('product_id');
        $number=$request->input('number');
        $price=Product::where('ProductId',$pid)->value('price');
        DB::insert('insert into BeverageList (user_id, product_id, price, number) values (?, ?, ?, ?)',[$user,$pid, $price, $number]);


        return redirect('/orders/BeverageList');
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BeverageList  $beverageList
     * @return \Illuminate\Http\Response
     */
    public function show(BeverageList $beverageList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BeverageList  $beverageList
     * @return \Illuminate\Http\Response
     */
    public function edit(BeverageList $beverageList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BeverageList  $beverageList
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BeverageList $beverageList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BeverageList  $beverageList
     * @return \Illuminate\Http\Response
     */
    public function destroy(BeverageList $beverageList)
    {
        //
    }
}
