@extends('layouts.main')
@section('content')
    <div>
        
        <div><b> id:</b> {{$post->id}}<b> Title:</b> {{$post->title}}</div>
        <div><b> Content: </b>{{$post->post_content}}</div>

    </div>
    <div><a href="{{route('main.edit',$post->id)}}">Редактировать</a></div>
    <form action="{{route('main.delete',$post->id)}}" method="post">
    @csrf
    @method('delete')
    <input type="submit" value="Удалить"/>
    </form>

    <div><a href="{{route('main.index')}}">Назад</a></div>
   
@endsection