@extends('layouts.main')
@section('title', 'ALL POST')
@section('container')
   
        <div>
            <h1 class="link-offset-3">All POST CRUD</h1>
      
            <div class="row">
                @foreach ($posts as $item)
                <div class="col-6 my-3">
                 
                    <div class="card">
                        <img src="https://source.unsplash.com/1200x400?anime" class="card-img-top" alt="anime">
                        <div class="card-body">
                            <p class="card-text">{{ $item->title }}</p>
                            <p class="card-text">{{ $item->slug }}</p>
                          <p class="card-text">{{ $item->body }}</p>
                        </div>
                      </div> 
                </div>
                @endforeach
            </div>

            <div>
                {{ $posts->links() }}
            </div>
        </div>
     
@endsection

