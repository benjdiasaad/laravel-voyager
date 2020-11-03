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
      </div>
    </div>
    @endforeach
  </div>
  <div class="col-md-4">
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam vitae saepe quis! Deserunt, excepturi laudantium repudiandae illo deleniti neque consequatur vitae optio in quibusdam ipsa ipsum, itaque nostrum recusandae. Assumenda!
  </div>


</div>
<div class="pagination">
{{ $myposts->links() }}
</div>
@endsection