<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Http\Resources\enseignantCollection;
use App\enseignant;

class enseignantController extends Controller
{
    public function store(Request $request)
    {
        $enseignant = new enseignant();
        $enseignant->nom = $request->input('nom');
        $enseignant->prenom = $request->input('prenom');
        $enseignant->module = $request->input('module');
        $enseignant->groupe = $request->input('groupe');
          $enseignant -> save();
       return response()->json('success');
         }

         public function index()
         {
          $enseignant = enseignant::all();
          return response()->json($enseignant);
         }
         public function edit($id)
         {
           $enseignant = enseignant::find($id);
           return response()->json($enseignant);
         }
         public function update(Request $request,$id)
         {
          $enseignant = enseignant::find($id);
          $enseignant->nom = $request->input('nom');
          $enseignant->prenom = $request->input('prenom');
          $enseignant->module = $request->input('module');
          $enseignant->groupe = $request->input('groupe');
          $enseignant -> save();
          return response()->json(enseignant::all());
         }
         public function delete($id)
         {
          $enseignant = enseignant::find($id);

           $enseignant->delete();

           return response()->json('successfully deleted');
        }
}
