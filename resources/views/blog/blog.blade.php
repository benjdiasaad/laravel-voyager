@extends('master')

@section('content')

<div class="row">
  <div class="col-md-8">
    <h1>  page de blog </h1>
    @foreach($myposts as $post)
    <div class="card text-center">
      <img class="card-img-top" src="{{ asset('/storage/'.$post->image) }}" alt="{{ $post->title}}">
      <div class="card-body">
        <h4 class="card-title"> {{ $post->title }} </h4>
        <p class="card-text">{{ \Illuminate\Support\Str::limit($post->excerpt,200) }}</p>
        <a href="{{ url('/blog/'.$post->category_id) }}"> <span class="badge badge-primary">{{ $post->category->name }} </span> </a>
      </div>
    </div>
    @endforeach
  </div>
 <div class="col-md-4">
   <h2> our List of categories </h2>
   <ul class="list-group">
   <li class="list-group-item @if(!$id) active @endif"> <a class="list-group-item-action" href="{{ url('/blog/') }}"> All </a></li>
     @foreach($mycategories as $category)
      <li class="list-group-item d-flex justify-content-between align-items-center @if($category->id == $id) active @endif">
          <a class="list-group-item-action" href="{{ url('/blog/'.$category->id) }}"> {{ $category->name }} </a>
          <span class="badge badge-primary badge-pill">{{ $category->posts->count() }}</span>
      </li>  
     @endforeach
   </ul>
  </div>


</div>
  
   <div class="pagination pagination-lg">
     {{ $myposts->links() }}
   </div>
  

@endsection