<?php

namespace App\Http\Controllers;

use App\Events\TestEvent;
use App\Models\Post;
use Illuminate\Http\Request;

class MainController extends Controller
{

    public function index(){
        $posts = Post::all();
        
        return view('main.index', compact('posts'));
    }

    public function create(){
        return view('main.create');

    }
    public function store(){
        $data = request()->validate([
            'title'=>'string|min:3|max:255',
            'post_content'=>'string',
            'likes'=>'integer|min:0|max:4294967295',
        ]);
        Post::create($data);
        $arr = array($data['title'],$data['post_content'],$data['likes']);
        event(new TestEvent($arr));

        return redirect()->route('main.index');
    }

    public function show(Post $post){
        return view('main.show', compact('post'));
    }
    public function edit(Post $post){
        return view('main.edit', compact('post'));
    }
    public function update(Post $post){
        $data = request()->validate([
            'title'=>'string|min:3|max:255',
            'post_content'=>'string',
            'likes'=>'integer|min:0|max:4294967295',
        ]);
        $post->update($data);
        return redirect()->route('main.show', $post->id);

    }
    public function destroy(Post $post){
        $post->delete($post);
        return redirect()->route('main.index');
    }
    public function first_or_create(){
        $anotherPost=[
            'title'=>'Some post',
            'post_content'=>'Some content123123',
            'likes'=>'2099',
            'is_published'=>'1',
        ];
        $post = Post::firstOrCreate(['title'=>'Intresing post1'],$anotherPost);
        dump($post->content);
        dd('finished');
    }
}
