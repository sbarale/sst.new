<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BathwrapsTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    public function testBathwrapsOfferRootResolves()
    {
        $response = $this->get('/remodeling/bath');

        $response->assertStatus(200);
    }

    public function testBathwrapsOneOfferResolves()
    {
        $response = $this->get('/remodeling/bath/1');

        $response->assertStatus(200);
    }

    public function testBathwrapsTwoOfferResolves()
    {
        $response = $this->get('/remodeling/bath/2');

        $response->assertStatus(200);
    }

    public function testBathwrapsThreeOfferResolves()
    {
        $response = $this->get('/remodeling/bath/3');

        $response->assertStatus(200);
    }
}
