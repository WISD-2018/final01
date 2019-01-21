@extends('layouts.app')

@section('content')
<div class="panel-body">
	
	<form ation="/product/create" method="POST" accept-charset="utf-8">
		{{csrf_field()}}
		<div class="form-group">
			<label for="product-name" class="col-sm-3 control-label" style="font-size: 18px;font-weight: bold;">新增產品</label>
			<div class="col-sm-6">
				<label>name</label><input type="text" name="name" class="form-control">
			</div>
			<div class="col-sm-6">
				<label>price</label><input type="text" name="price" class="form-control">
			</div>	
		</div>
		 <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> 增加產品
                    </button>
                </div>
            </div>
	</form>

	@if (count($products) > 0)
        <div class="panel panel-default">

            <div class="panel-body">
                <table class="table table-striped task-table">

                    <thead>
                        <th style="font-size:18px">目前產品</th>
                        <th>&nbsp;</th>
                    </thead>

                    <tbody>
                        @foreach ($products as $product)
                            <tr>

                                <td class="table-text">
                                    <div style="font-size: 16px">名稱：{{ $product->name }}</div>
                                    <div style="font-size: 16px">價格：{{ $product->price }}</div>
                                </td>

                                <td>
                                    <form action="/products/{{ $product->id }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}

                                        <button>刪除產品</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
	@endsection