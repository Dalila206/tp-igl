/*
|--------------------------------------------------------------------------
| Class EnseignantController
|--------------------------------------------------------------------------
|   controlls the access and modifications in the enseignant table in database 
|   
*/
class GroupeController extends Controller
{
    // ...
}

/**
 * Here's the functions
 */


    /**
     *stores a request with contaibs a student mark and name in the groupe table in the database
     * @param {Request} $request 
     * @public
     * @return response()->json
     */
    function store(){
        // ...
    }
    /**
     * list all data from database
     * @public
     * @return response()->json
     */

    function index(){
        // ...
    }
    /**
     * edit an element from database
     * @public
     * @return response()->json
     */

    function edit(){
        // ...
    }
    /**
     * updates new data relative to the student in the table groupe of the database
     * @param {Request} $request 
     * @param {id} $id
     * @public
     * @return response()->json
     */
    function update($request,$id){

        // ...
    }

    /**
     * delete the row relative to id in parameter from groupe table of the databse
     * @param {id} $id
     * @public
     * @return response()->json
     */
    function delet($id)
    {
        // ...
    }

