<?php

namespace Tests\Feature;

use Tests\TestCase;

class TrainingPageTest extends TestCase
{
    /**
     * Test if the training page returns a successful response.
     */
    public function test_training_page_returns_successful_response(): void
    {
        $response = $this->get('/training');

        $response->assertStatus(200);
        $response->assertSee('Training & Empowerment');
        $response->assertSee('Parent Empowerment Program');
        $response->assertSee('Inclusive Educator Training');
    }
}
