@extends('master')

@section('content')

@if(session('success'))
<div class="row">
    <div class="col-md-6 mx-auto text-center">
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    </div>
</div>
@endif

<div class="row">
    <div class="col-md-3"> <h2> {{ setting('contact.phone') }} </h2> </div>
    <div class="col-md-3"><h3> {{setting('contact.email')}} </h3> </div>
    <div class="col-md-3"></div>
</div>
<br>
<div class="row">
    <div class="col-md-6"> 
        {!! setting('contact.map') !!}
    </div>
    <div class="col-md-6">
        <form action="{{ url('/contact') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="object">Object</label>
                <input type="text" name="object" id="object" class="form-control" placeholder="" aria-describedby="helpId">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" id="email" class="form-control" placeholder="" aria-describedby="helpId">
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control" name="message" id="message" cols="30" rows="10"></textarea>
            </div>
            <button class="btn btn-primary block"> Ajouter </button>
        </form>

    </div>
</div>

@endsection