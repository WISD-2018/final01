<?php
namespace App\Http\Controllers;
use App\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
class CartController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $all = 0;
            $data = DB::table('carts')
            ->where('user_id',Auth::user()->id)
            ->get();
            foreach ($data as $s){
                $all = $all + $s->total;
            }
            return view('carts.index',['carts' => $data,'a' =>$all]);
        }else{
            return redirect()->route('login');
        }
    }
    public function add($id)
    {
        if (Auth::check()) {
            $good = DB::table('products')->where('id', $id)->value('name');
            $price = DB::table('products')->where('id', $id)->value('price');
            $pr = DB::table('products')->where('id', $id)->value('price');
            $photo = DB::table('products')->where('id', $id)->value('image');
            DB::table('carts')->insert(
                [
                    'cost' => $price,
                    'name' => $good,
                    'image' => $photo,
                    'total' =>$pr,
                    'user_id'=>Auth::user()->id,
                    'product_id'=> $id,
                ]
            );
            return Redirect::to(url()->previous());
        }
        else{return redirect()->route('login');}
    }
    public function update($id,$quantity){
        if (Auth::check()) {
            $c= DB::table('carts')->where('id', $id)->value('cost');
            DB::table('carts')
            ->where('id', $id)
            ->update([
                'quantity' => $quantity,
                'total' => $c * $quantity
            ]);
            return Redirect::to(url()->previous());
        }
        else{return redirect()->route('login');}
    }
    public function delete($id){
        if (Auth::check()) {
            Cart::destroy($id);
            return Redirect::to(url()->previous());
        }
        else{return redirect()->route('login');}
    }
}