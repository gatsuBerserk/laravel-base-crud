@extends('layouts.main')
@section('title', "Laravel CRUD")

@section('main')
<div class="container-fluid"> 
    <div class="row">
        @foreach ($comics as $comic)
        <div class="col-3">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="{{$comic->thumb}}" class="img-fluid rounded-start" alt="{{$comic->title}}">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">{{$comic->title}}</h5>
                      <p class="card-text">{{$comic->series}}</p>
                      <p class="card-text">{{$comic->sale_date}}</p>
                      <p class="card-text">{{ucfirst($comic->type)}}</p>
                      <p class="card-text">{{$comic->price}} €</p> 
                      <a href="#"><button type="button" class="btn btn-dark">Info</button></a>
                    </div>
                  </div>
                </div>
              </div>
        </div>
        @endforeach
    </div>
</div>

@endsection