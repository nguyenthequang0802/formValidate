<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view('index', ['posts'=>$posts]);
    }

    public function create(){
        return view('create');
    }
    public function store(Request $request){
        $input = $request->validate([
            'title' => 'required|unique|max:255',
            'descrip' => 'required|max:255',
            'content' => 'required|max:600'
        ]);
        $post = new Post();
        $post['title'] = $input['title'];
        $post['description'] = $input['descrip'];
        $post['content'] = $input['content'];
        $post->save();
        return redirect()->route('post.index');
    }
    public function edit($id){
        $post = Post::find($id);
        return view('edit', ['post'=>$post]);
    }
    public function update(PostRequest $request, $id){
        $input = $request->all();
        $post = Post::find($id);
        $post['title'] = $input['title'];
        $post['description'] = $input['descrip'];
        $post['content'] = $input['content'];
        $post->save();
        return redirect()->route('post.index');
    }
}
