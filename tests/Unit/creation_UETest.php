<?php

namespace Tests\Unit;

use App\Models\UE;
use App\Models\User;


use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class creation_UETest extends TestCase
{
    use RefreshDatabase;

    public function test_creation_ue()
{
    // Créer un utilisateur fictif
    $user = User::factory()->create();

    // Simuler que cet utilisateur est connecté
    $this->actingAs($user);

// Faire la requête de test
$response = $this->post(route('ues.store'), [
    'code' => 'UE101',
    'nom' => 'Informatique',
    'credits_ects' => 6,
    'semestre' => 1,
]);


// Vérifier que la réponse est un code HTTP 201 (création réussie)
$response->assertStatus(201);

// Vérifier que l'UE a bien été créée dans la base de données
$this->assertDatabaseHas('unites_enseignements', [
    'code' => 'UE101',
    'nom' => 'Informatique',
    'credits_ects' => 6,
    'semestre' => 1,
]);
}


    

}