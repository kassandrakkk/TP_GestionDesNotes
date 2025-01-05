<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;




class NoteTest extends TestCase
{
    use RefreshDatabase;

    public function test_ajout_note()
    {
        // Crée un étudiant et un élément constitutif (EC)
        $etudiant = Etudiant::factory()->create();
        $ec = EC::factory()->create();

        // Envoie une requête pour ajouter une note
        $response = $this->post(route('notes.store'), [
            'etudiant_id' => $etudiant->id,
            'ec_id' => $ec->id,
            'note' => 15,
            'session' => 'normale',
        ]);

        // Vérifie que la réponse a le bon statut
        $response->assertStatus(200);

        // Vérifie que la note a bien été ajoutée dans la base de données
        $this->assertDatabaseHas('notes', [
            'etudiant_id' => $etudiant->id,
            'ec_id' => $ec->id,
            'note' => 15,
            'session' => 'normale',
        ]);
    }
}
