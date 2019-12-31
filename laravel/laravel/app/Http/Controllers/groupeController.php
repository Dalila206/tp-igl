<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Groupe ;  
class GroupeController extends Controller
{
    public function store(Request $request)
    {
        $groupe = new Groupe();
        $groupe->nom = $request->input('nom');
        $groupe->prenom = $request->input('prenom');
        $groupe->notes = $request->input('notes');
        $groupe -> save();
        return response()->json('success');
         }
         public function listgroup()
         {
             $groupe = Groupe::all();
            return response()->json($groupe);
         }
        
         public function update(Request $request,$id)
         {
             $groupe = Groupe::find($id);
             $groupe->nom = $request->input('nom');
             $groupe->prenom = $request->input('prenom');
             $groupe->notes = $request->input('notes');
             $groupe -> save();
             return response()->json(Groupe::all());
         }
         public function delete(Request $request,$id)
         {
           
                $groupe = Groupe::find($id);

                $groupe->delete();
                return response()->json('users deleted');
            
            

          
        }
}
