<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Topic;
use App\Company;

class BasicController extends Controller
{
    // Just listing our topics
    public function index(){

        /** Topics */

        /* $knownTopics = Topic::all()->where('known', 1); */

        $knownTopics = Topic::known()->get();
        $unknownTopics = Topic::unknown()->get();

        return view('basic', compact('knownTopics','unknownTopics') );
    }

    public function save(){

        /* dd(request('name'), request('known')); */
        // Just saving new topics


        /** Lets add some validation here at the top */
        $data = request()->validate([
            'name' => 'required|min:3',
            'known' => 'required'
        ]);

        /** Old one-by-one method */
        /* $topic = new Topic();
        $topic->name = request('name');
        $topic->known = request('known');
        $topic->save();*/

        /** Chad Mass-assignment method */
        Topic::create($data);

        return back();

    }

    public function create(){


        return view('users.create');

    }

}
