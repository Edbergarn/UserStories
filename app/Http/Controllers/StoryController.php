<?php

namespace App\Http\Controllers;

use App\Story;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class StoryController extends Controller
{
    public function index(){

    }

    public function show($uuid){
        $story = Story::where('uuid', $uuid)->get();
        return view('story', [
            'story' => $story
        ]);
    }

    public function store(Request $request){

        $validatedData = $request->validate([
            'role' => 'required',
            'activity' => 'required',
            'test' => 'required',
            'context' => 'required',
            'reason' => 'required'
        ]);

        $story = ('Som en ' . $_POST['role'] . ' vill jag ' . $_POST['activity'] . ' ' . $_POST['test'] . ' ' . $_POST['context'] . ' för att ' . $_POST['reason'] . '.');

        $uuid = Str::uuid()->toString();

        $newStory = new Story([
            'story' => $story,
            'uuid' => $uuid
        ]);
        $newStory->save();

        return redirect('/story/' . $uuid);
    }
}
