<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Http\Resources\enseignantCollection;
use app;

class enseignantController extends Controller
{
    public function store(Request $request)
    {
        $enseignant = new enseignant([
            'nom' => $request->get('nom'),
            'prenom' => $request->get('prenom'),
             'module' =>$request ->get('module'),
             'groupe' => $request->get('groupe')
        ]);
        $enseignant -> save();
       // return response()->json('success');
         }

         public function index()
         {
             return new enseignantCollection(enseignant::all());
         }
         public function edit($id)
         {
           $enseignant = enseignant::find($id);
           return response()->json($enseignant);
         }
         public function update($id,Request $request)
         {
            $enseignant = enseignant::find($id);
            $enseignant-> update($request->all());
            return response()->json('successfully updated');
         }
         public function delete($id)
         {
          $enseignant = enseignant::find($id);

           $enseignant->delete();

           return response()->json('successfully deleted');
        }
}
