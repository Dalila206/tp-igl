/*
|--------------------------------------------------------------------------
| Class GroupeController
|--------------------------------------------------------------------------
|   controlls the access and modifications in the groupe table in database 
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
     * returns all the data from the table groupe
     * @public
     * @return response()->json
     */

    function listgroup(){
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

