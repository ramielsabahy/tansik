@extends('layouts.main')



@section('content')
<section class="content" style="height: 586px">
	<div class="panel panel-default" style="background-color: white;margin-top: 15px;" >

		<div class="panel-body">
			<table class="table table-hover">
				<thead>

					<th>
						الاسم
					</th>
					<th>
						الهاتف
					</th>
					<th>
						العنوان
					</th>
					<th>
						الخدمه المطلوبه
					</th>
					<th>
						التفاصيل
					</th>
					<th>
						تاريخ الطلب
					</th>
					<th>
						حذف
					</th>
					
				</thead>
				<tbody>
					@if($orders->count() > 0)
						@foreach($orders as $order)
							<tr>
								
								<td>
										{{ $order->name }}
								</td>
								<td>
										{{ $order->phone }}
								</td>
								<td>
										{{ $order->address }}
								</td>
								<td>
										{{ $order->service }}
								</td>
								<td>
										{{ $order->details }}
								</td>
								<td>
										{{ $order->created_at }}
								</td>
								<td>
									<a href="{{ route('deleteOrder', ['id' => $order->id]) }}" class="btn btn-xs btn-danger">
										حذف
									</a>
								</td>
							</tr>
						@endforeach
					@else
						<tr>
							<th colspan="7" class="text-center">No Orders yet.</th>
						</tr>
					@endif
				</tbody>
			</table>
		</div>
	</div>

	</section>
@stop