<?php

namespace Tests\Feature;

use App\Models\Category;
use App\Models\Idea;
use App\Models\Status;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Throwable;

class ShowIdeasTest extends TestCase
{
    use RefreshDatabase;

    public function testItShowsOnMainPage()
    {
        $categoryOne = Category::factory()->create([
            'name' => 'Category 1'
        ]);
        $categoryTwo = Category::factory()->create([
            'name' => 'Category 2 '
        ]);

        $statusOpen = Status::factory()->create(['name' => 'Open', 'classes' => 'bg-gray-200']);
        $statusConsidering = Status::factory()->create(['name' => 'Considering', 'classes' => 'bg-[#8b60ed] text-white']);

        $ideaOne = Idea::factory()->create([
            'title' => 'My First Idea',
            'category_id' => $categoryOne->id,
            'status_id' => $statusOpen->id,
            'description' => 'Description of my first idea',
        ]);

        $ideaTwo = Idea::factory()->create([
            'title' => 'My Second Idea',
            'category_id' => $categoryTwo->id,
            'status_id' => $statusConsidering->id,
            'description' => 'Description of my second idea',
        ]);

        $response = $this->get(route('idea.index'));

        $response->assertOk();

        $response->assertSee($ideaOne->title);
        $response->assertSee($ideaOne->description);
        $response->assertSee($categoryOne->name);
        $response->assertSee($statusOpen->name, false);

        $response->assertSee($ideaTwo->title);
        $response->assertSee($ideaTwo->description);
        $response->assertSee($categoryTwo->name);
        $response->assertSee($statusConsidering->name, false);
    }

    public function testItShowsOnTheShowPage()
    {
        $category = Category::factory()->create([
            'name' => 'Category 1'
        ]);

        $statusOpen = Status::factory()->create(['name' => 'Open', 'classes' => 'bg-gray-200']);

        $idea = Idea::factory()->create([
            'title' => 'My First Idea',
            'category_id' => $category->id,
            'status_id' => $statusOpen->id,
            'description' => 'Description of my first idea',
        ]);

        $response = $this->get(route('idea.show', $idea));

        $response->assertOk();

        $response->assertSee($idea->title);
        $response->assertSee($idea->description);
        $response->assertSee($category->name);
        $response->assertSee($statusOpen->name);
    }

    public function testPaginationWorks()
    {
        $category = Category::factory()->create([
            'name' => 'Category 1'
        ]);

        $statusOpen = Status::factory()->create(['name' => 'Open', 'classes' => 'bg-gray-200']);

        Idea::factory(Idea::PAGINATION_COUNT + 1)->create([
            'category_id' => $category->id,
            'status_id' => $statusOpen->id,
        ]);

        $ideaOne = Idea::find(1);
        $ideaOne->title = 'My first idea';
        $ideaOne->save();

        $ideaEleven = Idea::find(11);
        $ideaEleven->title = 'My eleventh idea';
        $ideaEleven->save();

        $response = $this->get('/');

        $response->assertOk();

        $response->assertSee($ideaOne->title);
        $response->assertSee($ideaOne->description);

        $response->assertDontSee($ideaEleven->title);
        $response->assertDontSee($ideaEleven->description);

        $response = $this->get('/?page=2');

        $response->assertDontSee($ideaOne->title);
        $response->assertDontSee($ideaOne->description);

        $response->assertSee($ideaEleven->title);
        $response->assertSee($ideaEleven->description);
    }
}
