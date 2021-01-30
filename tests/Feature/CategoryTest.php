<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CategoryTest extends TestCase
{

    public function testCategory()
    {
        $this->withExceptionHandling();

        $category = [
            'title'=>'laptops',
            'description'=>'any description'
        ];

        $this->post('/categories, $category');

        $this ->assertDatabaseHas('categories', $category);

        $response = $this->get('/categories');

        $response->assertStatus(200);

        $response->assertSee($category['title']);
    }
}
