@extends("layouts.main")

@section('main')
    <div class="container-fluid mt-5">
        
            <a href="{{route("comics.index")}}">
                <button class="btn btn-dark">
                    Torna alla Home
                </button>
            </a>
        
            <div class="col-12 d-flex justify-content-center">
                <figure>
                    <img src="{{$comic->thumb}}" alt="">
                </figure>
                
            </div>
            <div class="col-6 mx-auto">
                <p>{{$comic->description}}</p>
            </div>
    </div>
@endsection