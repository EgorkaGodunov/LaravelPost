@extends('layouts.main')
@section('content')
<form action="{{route('main.update', $post->id)}}" method="post">
        @csrf
        @method('patch')
        <div>
            <label for="post_name">Название поста</label>
            <input id="post_name" name="title" value="{{$post->title}}">
        </div>
        <div>
            <label for="text">Текст</label>
            <textarea type="text"id="text" name="post_content">{{$post->post_content}}</textarea>
        </div>
        <div>
            <label for="post_likes">Лайки</label>
            <input type="number" id="post_likes" name="likes" value="{{$post->likes}}">
        </div>
        <div>
            <button type="submit">Обновить</button>
        </div>
    </form>
@endsection