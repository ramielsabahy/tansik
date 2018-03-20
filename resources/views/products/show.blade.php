@extends('layouts.main')



@section('content')
<section class="content" style="height: 586px">
	<div class="panel panel-default" style="background-color: white;margin-top: 15px;" >

		<div class="panel-body">
			<table class="table table-hover">
				<thead>

					<th>
						الصوره
					</th>
					<th>
						العنوان
					</th>
					<th>
						المحتوى
					</th>
					<th>
						تعديل
					</th>
					<th>
						حذف
					</th>
				</thead>
				<tbody>
					@if($products->count() > 0)
						@foreach($products as $product)
							<tr>
								<td>
									<img src="/{{ $product->image }}" alt="{{ $product->title }}" width="70px" height="50px">
								</td>
								<td>
										{{ $product->title }}
								</td>
								<td>
										{{ $product->content }}
								</td>
								<td>
									<a href="{{ route('editProduct', ['id' => $product->id]) }}" class="btn btn-xs btn-info">
										تعديل
									</a>
								</td>
								<td>
									<a href="{{ route('deleteProduct', ['id' => $product->id]) }}" class="btn btn-xs btn-danger">
										حذف
									</a>
								</td>
								
							</tr>
						@endforeach
					@else
						<tr>
							<th colspan="5" class="text-center">لا يوجد منتجات.</th>
						</tr>
					@endif
				</tbody>
			</table>
		</div>
	</div>

	</section>
@stop