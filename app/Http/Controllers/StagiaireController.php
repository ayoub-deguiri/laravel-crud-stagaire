<?php

namespace App\Http\Controllers;

use App\Models\Stagiaire;
use Illuminate\Http\Request;

class StagiaireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stagiaires = Stagiaire::all();
        return view('Stagiaire.index', compact('stagiaires'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Stagiaire.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'nom' => 'required|regex:/^[A-Za-z]+$/',
                'test'=>'required|regex:/^[A-Za-z]+$/',
                'prenom' => 'required|regex:/^[A-Za-z]+$/',
                'date_naissance' => 'required|date',
                'note' => 'required|numeric|between:0,20',
                'genre' => 'required|in:M,F',
                'photo' => 'image|mimes:png,jpg,jpeg|max:8000'
            ],
            [
                'nom.required' => 'Nom obligatoire',
                'nom.regex' => 'Format du nom  incorrect',
                'prenom.required' => 'Prenom obligatoire',
                'prenom.regex' => 'Format du prenom obligatoire',
                'date_naissance.required' => 'Date Naissance obligatoire',
                'date_naissance.date' => 'Saisir une date correcte',
                'note.required' => 'Note obligatoire',
                'note.numeric' => 'Note doit etre numerique',
                'note.between' => 'Note doit etre entre 0 et 20',
                'genre.required' => 'Genre doit etre choisi',
            ]
        );
        $photoName = null;
        if (isset($request->photo)) {
            $photoName = time() . '.' . $request->photo->extension();
            $request->photo->move(public_path('photoStagiaire'), $photoName);
        }
        Stagiaire::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'genre' => $request->genre,
            'date_naissance' => $request->date_naissance,
            'note' => $request->note,
            'photo' => $photoName,
        ]);
        return redirect()->route('stagiaires.index')->with('success', "la stagiaire a été ajouté avec succes .");
    }

    /**
     * Display the specified resource.
     */
    public function show(Stagiaire $stagiaire)
    {
        return view('Stagiaire.show', compact('stagiaire'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Stagiaire $stagiaire)
    {
        return view('Stagiaire.edit', compact('stagiaire'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Stagiaire $stagiaire)
    {
        $photoName = null;
        if (isset($request->photo)) {
            $photoName = time() . '.' . $request->photo->extension();
            $request->photo->move(public_path('photoStagiaire'), $photoName);
        }
        $stagiaire->update([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'genre' => $request->genre,
            'date_naissance' => $request->date_naissance,
            'note' => $request->note,
            'photo' => isset($request->photo) ? $photoName : $stagiaire->photo,
        ]);
        return redirect()->route('stagiaires.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Stagiaire $stagiaire)
    {
        $stagiaire->delete();
        return redirect()->route('stagiaires.index');
    }
}
