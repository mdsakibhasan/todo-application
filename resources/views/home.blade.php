@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<form action="" method="post" class="form-inline">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<input type="text" name="name" class="form-control" placeholder="Enter a Task Name">
				<input type="submit" value="SAVE" class="btn btn-primary" class="form-control">
			</form>

			<h3>Task List</h3>
			<table class="table">
				<tr>
					<td>SL</td>
					<td>Task Name</td>
					<td>Task Status</td>
					<td>Action</td>
				</tr>
				<?php $i=1; ?>
				@foreach($data as $row)
					<tr>
						<td>{{$i}}</td>
						<td>{{$row->name}}</td>
						<td>{{$row->status}}</td>
						<td>
							<a href="" class="btn btn-warning">Edit</a>
							<a href="" class="btn btn-danger">Delet</a>
						</td>
					</tr>
				<?php $i=$i+1; ?>
				@endforeach
			</table>
		</div>
	</div>
</div>
@endsection
