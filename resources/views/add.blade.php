@extends('layout.app')

@section('title') AddFact @endsection

@section('content')


<section class="section1">
    <div class="title">
        <p class="title-text">Add your own fact!</p>
    </div>
    <div class="content">
        <hr>
        <form action="add/data" class="form" method="POST">
            @csrf
            <label for="text" class="label">Enter your fact</label>
            <input type="text" placeholder="Some interesting fact..." required class="fact" name="fact">
            <p class="btn"><button type="submit" class="but">Send</button></p>
        </form>
    </div>
</section>


@endsection