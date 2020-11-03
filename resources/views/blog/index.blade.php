@extends('master')

@section('slider')
 <div class="row">
    <div class="col-md-12">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
       <div class="carousel-inner">

       @foreach($myposts as $post)
       
          <div class="carousel-item @if($loop->first) active @endif">
              <img src="{{ asset('/storage/'.$post->image) }}" class="d-block w-100" alt="{{$post->title}}">
          </div>
       @endforeach
        
       </div>
     <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
     </a>
     <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
     </a>
    </div>            
   </div>
  </div>

@endsection



@section('content')

 


  <div class="row">

  @foreach($myposts as $post)
    <div class="col-md-4 my-2">
      <div class="card">
        <img class="card-img-top" src="{{ asset('/storage/'.$post->image) }}" alt="">
        <div class="card-body">
          <h4 class="card-title">{{ $post->title }}</h4>
          <p class="card-text">{{ \Illuminate\Support\Str::limit($post->excerpt,100) }}</p>
        </div>
      </div>
    </div>
  @endforeach
  </div>


@endsection

@section('javascripts')

<script>

  $(document).ready(function(){
    $('.carousel').carousel()
  })

</script>

@endsection
