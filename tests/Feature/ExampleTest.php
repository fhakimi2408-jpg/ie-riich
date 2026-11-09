<?php

namespace Tests\Feature;

use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * Test that the IERIICH 13 exhibition mainpage returns a successful response and contains all key poster elements.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('IERII');
        $response->assertSee('RESEARCH');
        $response->assertSee('INVENTION • INNOVATION');
        $response->assertSee('CREATIVITY &amp; HUMANITIES', false);
        $response->assertSee('SITC HALL');
        $response->assertSee('Universiti Pendidikan Sultan Idris');
        $response->assertSee('Fakulti Komputeran &amp; Meta-Teknologi', false);
        $response->assertSee('100 Tahun SITC');
    }
}
