<?php

namespace App\Http\Controllers;

use App\Story;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class StoryController extends Controller
{        
    
    function random_color_part() {
        return str_pad( dechex( mt_rand( 0, 255 ) ), 2, '0', STR_PAD_LEFT);
    }
    
    function random_color() {
        return $this->random_color_part() . $this->random_color_part() . $this->random_color_part();
    }

    public function index(){
        $examples = DB::select('select * from stories ORDER BY rand() LIMIT 3');
        return view('welcome', [
            'examples' => $examples
        ]);
    }

    public function show($uuid){
        $story = Story::where('uuid', $uuid)->get();
        $color = $this->random_color();
        $color2 = $this->random_color();


        return view('story', [
            'story' => $story,
            'color' => $color,
            'color2' => $color2

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
