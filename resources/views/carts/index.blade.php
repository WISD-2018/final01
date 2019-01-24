@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">

        <div class="col-lg-3">

            </div>
        </div>
        <!-- /.col-lg-3 -->
        <div class="col-lg-9">

                    </div>
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col-lg-9 -->
<center>
    <table>
        <tr>
            <td align="center">商品</td>
            <td align="center">單價</td>
            <td align="center">數量</td>
            <td align="center"> </td>
            <td align="center">總計</td>
        </tr>
        @foreach ($carts as $cart)

            <tr >
                <td width="400" align="center" valign="center">
                    <div class="product-right">
                        <h6>{{$cart->name}}</h6>

                    </div>
                </td>

                <td width="200" align="center" valign="center">
                    <div class="product-right1">
                        <h6>$ {{($cart->cost)}}</h6>
                        <div class="close"> </div>
                    </div>
                </td>

                <td width="50" align="center" valign="center">
                    <div class="product-right1">
                        <h6>{{$cart->quantity}}</h6>
                    </div>
                </td>
                <td width="5" align="center" valign="center">
                    <div class="product-right1">
                        <select name="quantity" onchange="javascript:location.href=this.value;">
                            <option value="">選擇數量</option>
                            <option value="{{route('cart.update',['id'=>$cart->id,'quantity'=>'1'])}}">1</option>
                            <option value="{{route('cart.update',['id'=>$cart->id,'quantity'=>'2'])}}">2</option>
                            <option value="{{route('cart.update',['id'=>$cart->id,'quantity'=>'3'])}}">3</option>
                            <option value="{{route('cart.update',['id'=>$cart->id,'quantity'=>'4'])}}">4</option>
                            <option value="{{route('cart.update',['id'=>$cart->id,'quantity'=>'5'])}}">5</option>
                            <option value="{{route('cart.update',['id'=>$cart->id,'quantity'=>'6'])}}">6</option>
                            <option value="{{route('cart.update',['id'=>$cart->id,'quantity'=>'7'])}}">7</option>
                            <option value="{{route('cart.update',['id'=>$cart->id,'quantity'=>'8'])}}">8</option>
                            <option value="{{route('cart.update',['id'=>$cart->id,'quantity'=>'9'])}}">9</option>
                            <option value="{{route('cart.update',['id'=>$cart->id,'quantity'=>'10'])}}">10</option>
                        </select>
                    </div>
                </td>

                <td width="200" align="center" valign="center">
                    <div class="product-right1">
                        <h6>$ {{($cart->total)}}</h6>
                        <div class="close"> </div>
                    </div>

                <td width="200" align="center" valign="center">
                    <div class="clear">
                        <form action="{{ route('cart.delete', $cart->id) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button class="btn btn-link"><img src="http://www.shejiye.com/uploadfile/icon/2017/0203/shejiyeiconsvybjzsohuj.png" width="25" height="25"></button>
                        </form>
                    </div>
                </td>
                </td>
            </tr>
        @endforeach
    </table>
    <tr>
        <td width="400" align="center" valign="center">
            <div class="product-right">
                <span>帳單總金額：</span>
                <strong>$  <?php echo $a; ?></strong>
            </div>
        </td>

    <div class="container" align="center">

        <button type="submit" class="btn essence-btn" style="margin-top: 6px;padding: unset;border: unset;"><a href="http://localhost:8000/checkout" class="btn btn-success">下一步</a></button>
    </div>
    <!-- /.container -->

    <!-- Footer -->


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    @endsection
