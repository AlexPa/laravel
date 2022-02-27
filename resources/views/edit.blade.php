@extends('layout')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-md-6">
                <h1>Edit image</h1>
                <img src="/{{$image->image}}" class="img-thumbnail" />
                <form action="/update/{{$image->id}}" enctype="multipart/form-data" method="post">
                    {{csrf_field()}}
                    <div class="form-control">
                        <input type="file" name="image" />
                    </div>
                    <button type="submit" class="btn btn-warning">Edit</button>
                </form>
            </div>
        </div>
    </div>

@endsection
