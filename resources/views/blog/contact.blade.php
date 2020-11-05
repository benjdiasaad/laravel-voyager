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
    <div class="col-md-3"> <h2> +212620669912 </h2> </div>
    <div class="col-md-3"><h3> benjdiasaad97@gmail.com </h3> </div>
    <div class="col-md-3"></div>
</div>
<br>
<div class="row">
    <div class="col-md-6"> 
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d53542.62313974921!2d-7.654678598754867!3d32.99286046213471!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda6055da9429e99%3A0x3f8d5e95dedefa12!2sSettat!5e0!3m2!1sfr!2sma!4v1604595859299!5m2!1sfr!2sma" width="500" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
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