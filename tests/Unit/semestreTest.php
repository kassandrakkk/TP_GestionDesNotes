<?php

namespace Tests\Unit;
use App\Models\UE;
use Illuminate\Foundation\Testing\RefreshDatabase;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class semestreTest extends TestCase
{
    public function test_semestre_valide()
{
    $response = $this->post('/ues', [
        'nom' => 'Chimie',
        'code' => 'UE04',
        'credits_ects' => 6,
        'semestre' => 1,
    ]);

    $response->assertStatus(201);
}

public function test_semestre_invalide()
{
    $response = $this->post('/ues', [
        'nom' => 'Chimie',
        'code' => 'UE04',
        'credits_ects' => 6,
        'semestre' => 5, // Semestre hors des limites
    ]);

    $response->assertSessionHasErrors(['semestre']);
}
}