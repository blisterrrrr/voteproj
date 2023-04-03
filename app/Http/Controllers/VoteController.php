<?php

namespace App\Http\Controllers;

use App\Models\Vote;

class VoteController extends Controller
{
    public function index()
    {
        $votes = Vote::orderByDesc('id')->paginate(5);
        return view('index', ['votes' => $votes]);
    }

    public function store()
    {
        $data = request()->validate([
            'title' => 'string',
            'text' => 'string',
            'img' => 'nullable|file'
        ]);
        $data['positive'] = 0;
        $data['negative'] = 0;
        $data['img'] = request()->file('img')->store('img', 'public');
        Vote::create($data);
        return redirect('/');
    }

    public function show($id)
    {
        $vote = Vote::findOrFail($id);
        return view('show_vote', ['vote' => $vote]);
    }

    public function incPos($id)
    {
        $vote = Vote::findOrFail($id);

        $vote->positive++;
        $vote->save();

        return back();
    }

    public function incNeg($id)
    {
        $vote = Vote::findOrFail($id);

        $vote->negative++;
        $vote->save();

        return back();
    }
}
