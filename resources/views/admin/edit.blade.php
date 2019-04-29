@extends('layouts.app')


@section('content')

@if($the_post)
  <form class="form" action="{{ route('post.update',['id'=>$the_post->id]) }}" method="post">
     {{ csrf_field() }}
          <div class="form-group">
            <input type="text" name="title_up" value="{{$the_post->title}}" class='form-control'>
          </div>
          <div class="form-group">
            <textarea type="text" name="content_up"  rows='5' class='form-control'>{{$the_post->content}}</textarea>
          </div>
          <div class="form-group">
            <input type="submit" name="submit" value="Update" class='btn btn-info'>
          </div>
  </form>

@endif




@endsection
