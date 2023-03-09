<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MiddlewareTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_pages_connection()
    {
        $pageslist=[
            '/','/about','/contact','/single','/work'
        ];

        foreach ($pageslist as $page)
            $response = $this->get($page)->assertStatus(200);


    }
}
