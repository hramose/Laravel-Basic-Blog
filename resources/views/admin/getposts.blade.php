@extends('layouts.app')


@section('content')



	<table class='table'>
	@if($post_list)
		@foreach($post_list as $posts)
			<tr><td><h4>{{$posts->title}}</h4><br>
			<p>{{$posts->content}}</p></td>
			<td><a href="{{ route('post.edit',['id'=>$posts->id]) }}" class='btn btn-info'>Edit</a></td>
				<td><a href="{{ route('post.delete',['id'=>$posts->id]) }}" class='btn btn-info'>Delete</a></td>

			</tr>
		@endforeach
	@endif
	</table>


@endsection
