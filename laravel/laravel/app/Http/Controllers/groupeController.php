<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Http\Resources\groupe as goupeResource;
use app\Http\Requests;
use app;


class groupeController extends Controller
{
   /* public function store(Request $request)
    {
        $groupe = new groupe([
            'nom' => $request->get('nom'),
            'prenom' => $request->get('prenom'),
            'notes' => $request->get('notes')
        ]);
        $groupe -> save();
        return response()->json('success');
         }*/

         public function index()
         {
             $groupe = groupe::all();
             return response()->json($groupe);
         }
         /*
         public function edit($id)
         {
           $groupe = groupe::find($id);
           return response()->json($groupe);
         }
         public function afficher()
         {
             $groupes = (groupe::all());
              
            return response()->json($groupe);
            //return goupeResource::collection($groupes);
         }
         public function update($id,Request $request)
         {
            $groupe = groupe::find($id);
            $groupe-> update($request->all());
            return response()->json('successfully updated');
         }
         public function delete($id)
         {
          $groupe = groupe::find($id);

           $groupe->delete();

           return response()->json('successfully deleted');
        }
        */
}
