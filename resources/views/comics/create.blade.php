@extends('layouts.main')

@section('title', "Aggiungi un fumetto")

@section('main')
<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-6 mx-auto">
            <form action="{{ route('comics.store') }}" method="post" class="d-flex flex-column">
            @csrf
            <label for="title">Title</label>
            <input type="text" name="title">

            <label for="description">Description</label>
            <textarea name="description" class="mt-2" ></textarea>

            <label for="thumb">Image</label>
            <input type="text" class="mt-2"  name="thumb">

            <label for="price">Price</label>
            <input type="number" class="mt-2"  name="price">

            <label for="series">Series</label>
            <input type="text" class="mt-2"  name="series">

            <label for="sale_date">Sale Date</label>
            <input type="text" class="mt-2"  name="sale_date">

            <label for="type">Type</label>
            <input type="text" class="mt-2" name="type">

            <button type="submit" class="btn btn-success mt-5"> Aggiungi</button>
            </form>
        </div>
    </div>
</div>
@endsection