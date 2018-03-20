@extends('layouts.main')
@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

@endsection
@section('content')
<section class="content" style="height: 586px">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">تعديل الخدمة</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="panel panel-default">

				        <div class="panel-body">
				            <form id="myForm" method="POST" action="{{ route('updateService', ['id' => $service->id]) }}" enctype="multipart/form-data" data-validate="parsley">
				                {{ csrf_field() }}
				                <div class="form-group">
				                    <label for="name" style="float: right">
				                        اسم الخدمة
				                    </label>
				                    <input class="form-control" data-parsley-trigger="change focusout" data-parsley-required='true' id="name" type="text" name="name" autocomplete="off" value="{{ $service['title'] }}"></input>
				                </div>
				                <div class="form-group">
				                    <label for="name" style="float: right">
				                        صورة الخدمة
				                    </label>
				                    <input class="form-control" id="image" type="file" name="image"></input>
				                </div>
				                <div class="form-group">
				                    <label for="name" style="float: right">
				                        وصف الخدمة
				                    </label>
				                    <textarea class="form-control" data-parsley-trigger="change focusout" data-parsley-required='true' name="desc" id="desc" style="width: 100%">{{ $service['content'] }}</textarea>
				                </div>

				                <div class="form-group">
				                    <div class="text-center">
				                        <input class="btn btn-success" type="submit" style="padding-left: 25px;padding-right: 25px" value="تم">
				                    </div>
				                </div>
				            </form>
				        </div>
				    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('js')

<script>
  $('#myForm').parsley();
</script>
@endsection