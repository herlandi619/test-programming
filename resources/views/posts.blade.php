@extends('layouts.main')
@section('title', 'CRUD')
@section('container')
   
     <div>
        <h1 class="link-offset-3">CRUD</h1>
      <div>

      <div>
         @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
               {{ session('success') }}
               <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
         @endif
      </div>
         

      <div class="my-3">
         <a href="/posts-add" class="btn btn-secondary">Add New Post +</a>
      </div>
        <table class="table">
           <thead>
              <tr>
                 <th scope="col">No</th>
                 <th scope="col">Title</th>
                 <th scope="col">Slug</th>
                 <th scope="col">Body</th>
                 <th scope="col">Action</th>
               </tr>
            </thead>
            @foreach ($posts as $item)
         <tbody>
           <tr>
             <th scope="row">{{ $loop->iteration }}</th>
             <td>{{ $item->title }}</td>
             <td>{{ $item->slug }}</td>
             <td>{{ $item->body }}</td>
             <td class="d-flex gap-2">
               <a href="/posts-show/{{ $item->id }}" class="btn btn-primary">Show</a>
               <a href="/posts-edit/{{ $item->id }}" class="btn btn-success">Edit</a>

               <form action="/posts-destroy/{{ $item->id }}" method="post">
                  @csrf
                  @method('delete')
                  <button class="btn btn-danger" onclick="return confirm('Apa anda yakin??')" type="submit">Delete</button>
               </form>
             
             </td>
           </tr>
       
         </tbody>
         @endforeach 
         </table>

           <div class="row">
            <div class="col-10">
               {{ $posts->links() }}
            </div>
           </div>
     
      </div>
   </div>
      
@endsection

