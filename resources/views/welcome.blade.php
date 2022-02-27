@extends('layout')

@section('title', 'Start page')

@section('content')
    <div class="container galBlock">
        <h1 align="center">My Gallery</h1>
        <div class="row">
            @foreach($images as $i => $image)
                <div class="col-md-3">
                    <div>
                        <img src="/{{$image->image}}"  width="220" class="img-thumbnail gallery-image"/>
                    </div>
                    <a href="/delete/{{$image->id}}" onclick="return confirm('Are yuo sure?')" class="btn btn-danger my-button">Delete</a>
                    <a href="/edit/{{$image->id}}" class="btn btn-warning my-button">Edit</a>
                    <a href="/show/{{$image->id}}" class="btn btn-info my-button">Show</a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
