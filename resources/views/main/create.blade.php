@extends('layouts.main')
@section('content')
<form action="{{route('main.store')}}" method="post">
        @csrf
        <div>
            <label for="post_name">Название поста</label>
            <input id="post_name" name="title">
        </div>
        <div>
            <label for="text">Текст</label>
            <textarea type="text"id="text" name="post_content"></textarea>
        </div>
        <div>
            <label for="post_likes">Лайки</label>
            <input type="number" id="post_likes" name="likes">
        </div>
        <div>
            <button type="submit">Создать</button>
        </div>
    </form>
@endsection