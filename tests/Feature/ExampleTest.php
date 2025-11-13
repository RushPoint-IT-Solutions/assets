<?php

namespace Tests\Feature;

<<<<<<< HEAD
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
=======
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
>>>>>>> 289fb23019f049e78edf03069ee7b1b551cc9399

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
