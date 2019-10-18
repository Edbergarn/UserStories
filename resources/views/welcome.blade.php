@extends('layout')
@section('body')
    <div class="box text" style="background-color: dimgrey;">
        <h1>Edbergarns Insane UserStories</h1>
        <form action="/story" method="post" autocomplete="off" class="form-style-4">
            @csrf
        <p>
            Som en 
            <input type="text" name="role" id="role">
            vill jag 
            <input type="text" name="activity" id="activity">
            <select name="test" id="test">
                <option value="på">på</option>
                <option value="i">i</option>
                <option value="av">av</option>
            </select>
            <input type="text" name="context" id="context">
            för att
            <input type="text" name="reason" id="reason">
            
            <input type="submit" value="submit" class="button">
        </p>
        </form>
        <h2>Exempel</h2>
        <p>{{ $examples[0]->story ?? "" }}</p>
        <p>{{ $examples[1]->story ?? ""}}</p>
        <p>{{ $examples[2]->story ?? ""}}</p>
    </div>
@endsection
