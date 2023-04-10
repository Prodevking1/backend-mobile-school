<?php

namespace App\Http\Controllers;

use App\Models\EmploiTemps;
use App\Models\Filiere;
use Illuminate\Http\Request;

class EmploiTempsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $emplois = EmploiTemps::all();
        $filieres = Filiere::all();
        return view('admin.emplois.index', compact(['emplois', 'filieres']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            "filiere" => "required",
            "dateDebut" => "required",
            "dateFin" => "required",
            "path" => "required",
        ]);

        $path = $request->file('path')->store('public/emplois-temps');
        EmploiTemps::create([
            "filiere" => $request->filiere,
            "dateDebut" => $request->dateDebut,
            "dateFin" => $request->dateFin,
            "path" => $path,
        ]);
        return redirect()->back()->with('success', 'Emploi de temps ajouté avec succès');
    }


    public function emploiByFiliere(Request $request)
    {
        $filiere = $request->input('filiere');
        $emplois = EmploiTemps::where('filiere', $filiere)
            ->orderByDesc('dateDebut')
            ->get();
        return response()->json($emplois);
    }


    public function downloadEmploi(Request $request)
    {
        $id = $request->input('id');
        $emploi = EmploiTemps::findOrfail($id);
        $file = storage_path('app/' . $emploi->path);
        $headers = [
            'Content-Type' => 'application/octet-stream',
        ];
        return response()->download($file, $emploi->filename, $headers);
    }




    /**
     * Display the specified resource.
     */
    public function show(EmploiTemps $emploiTemps)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EmploiTemps $emploiTemps)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, EmploiTemps $emploiTemps)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EmploiTemps $emploiTemps)
    {
        //
    }
}