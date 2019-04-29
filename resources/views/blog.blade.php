@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-10 col-md-offset-2" >
        @if($all_posts)
            @foreach($all_posts as $posts)
            <a href="{{  route('single.post',['id'=>$posts->id])}}"><h2>{{ $posts->title }}</h2></a><br>
            <p>{{ $posts->content }}</p>
            @endforeach
        @endif
    </div>
</div>
@endsection
