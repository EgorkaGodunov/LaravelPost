@extends('layouts.main')
@section('content')
    <div>
        @foreach($posts as $post)
            <div>
                <a href="{{route('main.show',$post->id)}}">
                    <b> id:</b> {{$post->id}}<b> Title:</b> {{$post->title}}
                </a>
            </div>
        @endforeach
    </div>
   <div> 
   </div>
@endsection