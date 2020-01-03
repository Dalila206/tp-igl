<?php

namespace Tests\Unit;


use PHPUnit\Framework\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Request;


class groupTest extends TestCase
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
            'notes'     =>     '12',
        ]);
        $controller = new GroupeController();
        $response = $controller->store($request);
        $this->assertEquals(302, $response->getStatusCode());
    
    }
    public function testUpdate(){
        $id = 1;
        Groupe::where('id', $id)->update(['nom' => 'dalila']);
        $user = DB::table('groupes')->where('id','1')->first();
        $this->assertEquals($user->nom,'dalila');
        
    }
    public function testListGroup(){
        $controller = new GroupeController();
        $user = DB::table('groupes')->get();
        $response =$controller->listgroup();
        foreach ($users as $user) {
            $this->assertTrue($user->contains($response->id));
            $this->assertTrue($user->contains($response->nom));
            $this->assertTrue($user->contains($response->prenom));
            $this->assertTrue($user->contains($response->notes));
            
        }}
    public function testDelete(){
            $controller = new GroupeController();
            $response = $controller->delete(1);
            $this->assertEquals(302, $response->getStatusCode());

        }



    }

