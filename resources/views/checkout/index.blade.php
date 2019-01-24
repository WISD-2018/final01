@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="py-5 text-center">
            <h2>結帳</h2>
        </div>
        <div class="col-12 col-md-6">
            <div class="checkout_details_area mt-50 clearfix">

                <div class="cart-page-heading mb-30">
                    <h5>帳單地址</h5>
                </div>

                <form action="/orders" method="post"role="form">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-6 mb-3">

                            <label for="username">收件人姓名<span>*</span></label>
                            <input type="text" class="form-control" name="username" maxlength="8" required>
                        </div>
                        <div class="col-12 mb-3">
                            <label for="useraddress">地址 <span>*</span></label>
                            <input type="text" class="form-control mb-3" name="useraddress" maxlength="35" required>

                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="userphone">電話號碼 <span>*</span></label>
                            <input type="text" class="form-control" name="userphone" min="0" maxlength="10" required>
                        </div>
                        <div class="col-md-6 mb-3">

                        </div>

                        <div class="row">
                            <div class="col-md-12 order-md-12 mb-12">
                                <li class="list-group-item d-flex justify-content-between">
                                    <span>帳單總金額：</span>
                                    <strong>$  <?php echo $a; ?></strong>
                                </li>
                                <ul class="list-group mb-3">

                                </ul>
                            </div>
                        </div>

                        <div class="container" align="center">
                            <button type="submit" class="btn essence-btn">結帳</button>
                        </div>
                        <div class="col-12">

                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection