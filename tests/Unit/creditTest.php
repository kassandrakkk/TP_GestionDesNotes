<?php

namespace Tests\Unit;
use App\Models\UE;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;


// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class creditTest extends TestCase
{
    use RefreshDatabase;
    public function test_credits_ects_valides()
{
    $user = User::factory()->create();
    $this->actingAs($user); // Authentifie l'utilisateur
    $response = $this->post('/ues', [
        'nom' => 'Informatique',
        'code' => 'UE02',
        'credits_ects' => 31,
        'semestre' => 1,
    ]);

    $response->assertStatus(201);
}

public function test_credits_ects_invalides()

{
    $response = $this->post('/ues', [
        'nom' => 'Informatique',
        'code' => 'UE02',
        'credits_ects' => 31, // Crédits supérieurs à la limite
        'semestre' => 1,
    ]);

    $response->assertSessionHasErrors(['credits_ects']);
}
}