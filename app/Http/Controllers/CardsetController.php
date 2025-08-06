<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cardset;
use App\Models\Word;
use Inertia\Inertia;

class CardSetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cardsets = Cardset::all();

        return Inertia::render('cardsets/Show', [
            'cardsets' => $cardsets,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('cardsets/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cardset = Cardset::create(
            [
                'name' => $request->get('name'),
            ]
        );
        $words = $request->get('words');

        $wordModels = collect($words)->map(function ($word) {
            return new Word([
                'word' => $word['word'],
                'translation' => $word['translation'],
            ]);
        });
        $cardset->words()->saveMany($wordModels);

        return redirect()->route('cardsets.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cardset $cardset)
    {
        $cardset->load('words');
        $words = $cardset->words;

        return Inertia::render('cardsets/Create', [
            'cardset' => $cardset,
            'words' => $words,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cardset $cardset)
    {
        $cardset->delete();
        return redirect('/cardsets');
    }
}
