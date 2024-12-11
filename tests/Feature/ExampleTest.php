<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    public function test_the_application_returns_a_welcome_page_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_has_usage_page(): void
    {
        $response = $this->get('/docs/usage');

        $response->assertStatus(200);
    }
}
