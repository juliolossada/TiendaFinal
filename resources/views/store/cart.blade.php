@extends('store.template')

@section('content')
<div class="container text-center">
	<div class="page-header">
	<h1><i class="fa fa-shopping-cart">Shopping Cart</i></h1>
</div>
<div class="table-cart">
	<p>
		<a href="{{route('cart-trash')}}" class="btn btn-danger"><i class="fa fa-trash"></i>Delete all items</a>
	</p>

	@if(count($cart))
	<div class="table-responsive">
		<table class="table table-striped table-hover table-bordered">
			<thead>
				<tr>
					<th>Image</th>
					<th>Product</th>
					<th>Price</th>
					<th>Numbers</th>
					<th>Subtotal</th>
					<th>Delete</th>
				</tr>
			</thead>
			<tbody>
				@foreach($cart as $item)
				<tr>
					<td><img src=" {{$item->image}}"></td>
					<td>{{$item->name}}</td>
					<td>{{number_format($item->price,2)}}</td>
					<td><input 
						min="1" 
						max="10"
						value="{{$item->quantity}}"
						id="product_{{$item->id}}" 
						type="number">
						<a href="#" class="btn btn-warning btn-update-item"
						data-href="{{route('cart-update',$item->slug)}}"
						data-id="{{$item->id}}">


						<i class="fa fa-refresh"></i>


					</td>
					<td>{{number_format($item->price * $item->quantity,2)}}</td>
					<td>
						<a href="{{route('cart-delete', $item->slug)}}" class="btn btn-danger">

							<i class="fa fa-remove"></i>
						</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table><hr>
		<h3>
			<span class="label label-success"></span> Total: ${{number_format($total,2)}}
		</h3>
	</div>
	@else
	<h3><span class="lable label-warning">You don't have items, Add some parts.</span></h3>
	@endif
	<hr>
	<p>
		<a href="{{route('home')}}" class="btn btn-primary">
			<i class="fa fa-chevron-circle left">Keep buying</i>
		</a>
		<a href="{{route('home')}}" class="btn btn-primary">
			<i class="fa fa-chevron-circle right">Pay</i>
		</a>
	</p>
</div>
</div>
@stop