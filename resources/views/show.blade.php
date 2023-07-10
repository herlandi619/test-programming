@extends('layouts.main')
@section('title' , 'Show Data Post')
@section('container')
    <div>
       <h1> Show Data Post</h1>
    </div>
    
       <div class="row">
        <div class="col-10">
            <div class="card mb-3">
                <img src="https://source.unsplash.com/1200x400?anime" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{ $posts->title }}</h5>
                  <p class="card-text">{{ $posts->slug }}</p>
                  <p class="card-text">{{ $posts->body }}</p>
                </div>
              </div>
        </div>
       </div>
    

    <div>
        <a href="/posts" class="text-decoration-none text-dark"><i class="bi bi-backspace"></i> Kembali</a>
    </div>
@endsection