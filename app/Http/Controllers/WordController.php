<?php

namespace App\Http\Controllers;

use App\Models\Cardset;
use Illuminate\Http\Request;
use App\Models\Word;
use Inertia\Inertia;


class WordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Cardset $cardset)
    {
        $words = Word::all();
        return Inertia::render('words/Words', [
            'words' => $words
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('words/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Word::create($request->input());

        return redirect('/words')->with('success');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $word = Word::findOrFail($id);

        return Inertia::render('words/Show', [
            'word' => $word
        ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Word $word)
    {
        $word->update([
            'word' => $request['word'],
            'translation' => $request['translation'],
        ]);
        return redirect()->back()->with('success', 'Word updated.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Word $word)
    {
        $word->delete();
        return redirect()->route('words.index')->with('success', 'Word deleted.');


    }
}
