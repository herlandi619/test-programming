@extends('layouts.main')
@section('title', 'Create')
@section('container')
   
    <div>
        <h1>Create New Post</h1>
    </div>

    <div class="row">
        <div class="col-6 mt-3">
            <a href="/posts" class="text-decoration-none text-dark"><i class="bi bi-backspace"></i> Kembali</a>
            <form class="mt-4" method="post">
                @csrf
                <div class="mb-3">
                  <label for="title" class="form-label">Title</label>
                  <input type="text" name="title" class="form-control" id="title" aria-describedby="emailHelp" required autofocus>
                </div>
                <div class="mb-3">
                  <label for="slug" class="form-label">Slug</label>
                  <input type="text" name="slug" class="form-control" id="slug" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3 d-block">
                    <label for="body" class="form-label">Body</label>
                    <textarea name="body" id="body" cols="70" rows="5"></textarea>
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </div>
     
@endsection

