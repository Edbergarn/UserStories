@extends('layout')

@section('css')
<link rel="stylesheet" href="css/app.css">    
@endsection

@section('body')
    <div class="box text" style="background-image: linear-gradient(to bottom right, #{{ $color }}, #{{ $color2 }});">
        <h1>UserStory</h1>
        <h2> {{ $story[0]->story ?? "" }}</h2>
        {{-- <form action="/" method="get"> --}}
            {{-- <input class="button" type="submit" value="Skriv en till vettja!"> --}}
        {{-- </form> --}}
        <a href="../">hej</a>
    </div>
@endsection
