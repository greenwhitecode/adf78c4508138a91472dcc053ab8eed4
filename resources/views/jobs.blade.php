@php    $public='';    if(config('app.env') == 'production')    $public ='public'; @endphp
@extends('layouts.app')
@section('title',$title)
@section('content')
    <div class="container">
        @include('partials.jobs')
    </div>
@endsection