<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function home ()
    {   
        $posts = Post::paginate(4);
        return view('home', [
            'posts' => $posts
        ]);
       
    }

    public function index()
    {   
        $posts = Post::paginate(5);

        return view('posts', [
            'posts' => $posts
        ]);
    }

    public function create ()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $posts = Post::create($request->all());
        return redirect('/posts')->with('success' , 'Data Telah Berhasil ditambahkan!!');      
    }

    public function show ($id)
    {   
        $posts = Post::findOrFail($id);
        return view('show',[
            'posts' => $posts
        ]);
    }

    public function edit($id)
    {   
        $posts = Post::find($id);
      
        return view('edit', [
            'posts' => $posts
        ]);
    }

    public function update($id)
    {
        $posts = Post::findOrFail($id);
        $posts->update(request()->all());

        return redirect('/posts')->with('success' , 'Data Berhasil diubah');
    }

    public function destroy($id)
    {
        $posts = Post::findOrFail($id);
        $posts->delete($id);

        return redirect('/posts')->with('success', 'Data telah berhasil dihapuss!!');
    }
}
