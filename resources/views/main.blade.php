@extends('layout.app')

@section('title') FactOfTheDay @endsection

@section('content')

<section class="section1">
    <div class="title">
        <p class="title-text">New fact for you!</p>
    </div>
    <div class="content">
        <hr>
        <div class="text">{{ $fact }}</div>
    </div>
</section>

@endsection