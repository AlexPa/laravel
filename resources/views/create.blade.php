@extends('layout')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-md-6">
            <h1>Add image</h1>
            <form action="/store" enctype="multipart/form-data" method="post">
                {{csrf_field()}}
                <div class="form-control">
                    <input type="file" name="image" />
                </div>
                <button type="submit" class="btn btn-success">Send</button>
            </form>
        </div>
    </div>
</div>

@endsection
