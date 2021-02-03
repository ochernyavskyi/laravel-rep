<?php

namespace Tests\Feature;

use App\Models\Category;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CategoryTest extends TestCase
{

    public function testCategoryEmpty()
    {
        $this->get('/categories')->assertSee('No Categories');
    }

    public function testCategoryExists()
    {
        $category = Category::factory()->create();
        $this->get('/categories')->assertSee($category->title);
    }

    public function testCategoryCreate()
    {
        $category = Category::factory()->raw();
        $this->post('/categories', $category);
        $this->assertDatabaseHas('categories', $category);
        $this->get('/categories')->assertSee($category['title']);
    }

    public function testCreateCategoryRequiredFields()
    {
        $this->post('/categories', [])->assertSessionHasErrors(['title', 'description']);
    }

    public function testDeleteCategory(){
        $category = Category::factory()->raw();
        $this->post('/categories', $category);
        $this->get('/categories/delete/' . $category['id']);
        $this->assertDatabaseMissing($category['id']);
    }

    public function testUpdateCategory(){
        $category = Category::factory()->raw();
        $this->post('/categories', $category);
        $this->get('/categories/' . $category['id']);
    }


    public function testCategory()
    {
        $this->withExceptionHandling();

        $category = Category::factory()->raw();

        $this->post('/categories', $category);

        $this->assertDatabaseHas('categories', $category);

        $response = $this->get('/categories');

        $response->assertStatus(200);

        $response->assertSee($category['title']);
    }
}
