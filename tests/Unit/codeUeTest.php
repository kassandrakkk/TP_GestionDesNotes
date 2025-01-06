<?php

namespace Tests\Unit;
use App\Models\UE;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Request;


// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class codeUETest extends TestCase
{

    public function test_code_ue_valide()
    {
        $response = $this->post('/ues', [
            'nom' => 'Physique',
            'code' => 'UE03',
            'credits_ects' => 6,
            'semestre' => 2,
        ]);
    
        $response->assertStatus(201);
    }
    
    public function test_code_ue_invalide()
    {
        $response = $this->post('/ues', [
            'nom' => 'Physique',
            'code' => 'INVALID_CODE',
            'credits_ects' => 6,
            'semestre' => 2,
        ]);
    
        $response->assertSessionHasErrors(['code']);
    }
    public function store(Request $request)
{
    // Validation et logique
    return response()->json(['message' => 'UE créée'], 201);
}

}
