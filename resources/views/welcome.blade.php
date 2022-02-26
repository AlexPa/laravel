@extends('layout')

@section('title', 'Start page')

@section('content')
<style type="text/css">
    button.my-button {
        width:100%;
        margin: 5px 0px 5px 0px;
    }
    .galBlock .row {
        margin: 0px 0px 40px 0px;
    }
</style>
    <div class="container galBlock">
        <h1 align="center">My Gallery</h1>
        <div class="row">
            <div class="col-md-3">
                <div>
                    <img src="/image.png"  width="183" class="img-thumbnail"/>
                </div>
                <button type="button" class="btn btn-danger my-button">Danger</button>
                <button type="button" class="btn btn-warning my-button">Warning</button>
                <button type="button" class="btn btn-info my-button">Info</button>
            </div>
            <div class="col-md-3">
                <div>
                    <img src="/image.png"  width="183" class="img-thumbnail"/>
                </div>
                <button type="button" class="btn btn-danger my-button">Danger</button>
                <button type="button" class="btn btn-warning my-button">Warning</button>
                <button type="button" class="btn btn-info my-button">Info</button>
            </div>
            <div class="col-md-3">
                <div>
                    <img src="/image.png"  width="183" class="img-thumbnail"/>
                </div>
                <button type="button" class="btn btn-danger my-button">Danger</button>
                <button type="button" class="btn btn-warning my-button">Warning</button>
                <button type="button" class="btn btn-info my-button">Info</button>
            </div>
            <div class="col-md-3">
                <div>
                    <img src="/image.png"  width="183" class="img-thumbnail"/>
                </div>
                <button type="button" class="btn btn-danger my-button">Danger</button>
                <button type="button" class="btn btn-warning my-button">Warning</button>
                <button type="button" class="btn btn-info my-button">Info</button>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div>
                    <img src="/image.png"  width="183" class="img-thumbnail"/>
                </div>
                <button type="button" class="btn btn-danger my-button">Danger</button>
                <button type="button" class="btn btn-warning my-button">Warning</button>
                <button type="button" class="btn btn-info my-button">Info</button>
            </div>
            <div class="col-md-3">
                <div>
                    <img src="/image.png"  width="183" class="img-thumbnail"/>
                </div>
                <button type="button" class="btn btn-danger my-button">Danger</button>
                <button type="button" class="btn btn-warning my-button">Warning</button>
                <button type="button" class="btn btn-info my-button">Info</button>
            </div>
            <div class="col-md-3">
                <div>
                    <img src="/image.png"  width="183" class="img-thumbnail"/>
                </div>
                <button type="button" class="btn btn-danger my-button">Danger</button>
                <button type="button" class="btn btn-warning my-button">Warning</button>
                <button type="button" class="btn btn-info my-button">Info</button>
            </div>
            <div class="col-md-3">
                <div>
                    <img src="/image.png"  width="183" class="img-thumbnail"/>
                </div>
                <button type="button" class="btn btn-danger my-button">Danger</button>
                <button type="button" class="btn btn-warning my-button">Warning</button>
                <button type="button" class="btn btn-info my-button">Info</button>
            </div>
        </div>
    </div>
@endsection
