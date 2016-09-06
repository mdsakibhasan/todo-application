@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h3>Todo/Edit</h3>
			<form action="{{route('postEditRoute',$data->id)}}" method="post" class="form-inline">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<input type="text" name="name" class="form-control" value="{{$data->name}}">
				<input type="text" name="status" class="form-control" value="{{$data->status}}">
				<input type="submit" value="Update" class="btn btn-primary" class="form-control">
			</form>
		</div>
	</div>
</div>
@endsection
