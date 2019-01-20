<form ation="/product/create" method="POST" accept-charset="utf-8">
	{{csrf_field()}}
	<label>Create product</label><br>
	<label>name</label><input type="text" name="name"><br>
	<label>price</label><input type="text" name="price"><br>
	<input type="submit">
</form>

<label>All product</label>
<!--{{ $products }}-->
@foreach($products as $product)
	<p>{{$product->name}}</p>
@endforeach