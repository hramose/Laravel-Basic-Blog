
@extends('layouts.app')

@section('content')
    <div>
      @if($single_post)

          <h2>{{ $single_post->title }}</h2><br>
          <p>{{ $single_post->content }}</p>

      @endif
    </div>

@endsection
