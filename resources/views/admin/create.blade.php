@extends('layouts.app')


@section('content')


<div>
	<form action="{{ route('admin.post.store')}}" method='post' enctype="multipart/form-data">

		{{ csrf_field() }}
		<div class="form-group">
			<input class="form-control" name='title' id='title' placeholder="Add Title Here"></input>
		</div>
		<div class="form-group">
			<textarea class="form-control" name='content' id='content' placeholder="Add Content Here" rows='5'></textarea>
		</div>
		<div class="form-group">
			<input class="btn btn-info" name='submit' type='submit'></input>
		</div>
	</form>
</div>

@endsection
