<?php
use PHPUnit\Framework\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Request;


class ensTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testStore()
    {
        $request = Request::create('/store', 'POST',[
            'id'     =>     '1',
            'nom'     =>     'khettaf',
            'prenom'     =>     'dalila',
            'module'     =>     'igl',
            'groupe'     =>     'g5',
            
        ]);
        $controller = new EnseignantController();
        $response = $controller->store($request);
        $this->assertEquals(302, $response->getStatusCode());
    
    }
    public function testUpdate(){
        $id = 1;
        Groupe::where('id', $id)->update(['nom' => 'dalila']);
        $user = DB::table('groupes')->where('id','1')->first();
        $this->assertEquals($user->nom,'dalila');
        
    }
    public function testDelete(){
            $controller = new EnseignantController();
            $response = $controller->delete(1);
            $this->assertEquals(302, $response->getStatusCode());

        }
        public function testedit(){
            $enseignant = enseignant::find(1);
            $response= $controller = new EnseignantController();
            $response = $controller->edit(1);
            $this->assertEquals($enseignant,$response);


        }
        public function testIndex(){
            $response=index();
            $user = DB::table('enseignant')->get();
            foreach ($users as $user) {
                $this->assertTrue($user->contains($response->id));
                $this->assertTrue($user->contains($response->nom));
                $this->assertTrue($user->contains($response->prenom));
                $this->assertTrue($user->contains($response->matiere));
                $this->assertTrue($user->contains($response->groupe));
                
            }
        }




    }

