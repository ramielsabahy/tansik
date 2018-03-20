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
					@if($services->count() > 0)
						@foreach($services as $service)
							<tr>
								<td>
									<img src="/{{ $service->image }}" alt="{{ $service->title }}" width="70px" height="50px">
								</td>
								<td>
										{{ $service->title }}
								</td>
								<td>
										{{ $service->content }}
								</td>
								<td>
									<a href="{{ route('editService', ['id' => $service->id]) }}" class="btn btn-xs btn-info">
										تعديل
									</a>
								</td>
								<td>
									<a href="{{ route('deleteService', ['id' => $service->id]) }}" class="btn btn-xs btn-danger">
										حذف
									</a>
								</td>
								
							</tr>
						@endforeach
					@else
						<tr>
							<th colspan="5" class="text-center">لا يوجد خدمات.</th>
						</tr>
					@endif
				</tbody>
			</table>
		</div>
	</div>

	</section>
@stop