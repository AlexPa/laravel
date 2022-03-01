<?php
    /**
     * $exception @var \Symfony\Component\HttpKernel\Exception\HttpException
     */
    ?>
@extends('layout')

@section('content')
    {{$exception->getStatusCode()}}
@endsection
