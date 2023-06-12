<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;

use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        Http::fake();
        $response = $this->get(route('movies.index'));
        $response->assertSuccessful();
        $response->assertSee('Popular Movie');
    }
}
