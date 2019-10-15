<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Stories</title>
</head>
<body>
    {{-- <div style="width:70%; text-align: center; margin: auto;"> --}}
        <form action="/story" method="post">
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
            .
            <input type="submit" value="submit">
        </p>
        </form>
        {{-- <h2>Exempel</h2> --}}
        {{-- <p>Som en ingenjör vill jag bli bäst  på programmering för att ta över världen.</p> --}}
        {{-- <p>Som en ingenjör vill jag alla elever F i engelska för att ta över världen.</p> --}}
        {{-- <p>Som en ingenjör vill jag alla elever F på programmering för att ta över världen.</p> --}}
    {{-- </div> --}}
</body>
</html>