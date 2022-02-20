<?php

namespace Tests\Feature;

use App\Models\Idea;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Throwable;

class ShowIdeasTest extends TestCase
{
    use RefreshDatabase;

    public function testItShowsOnMainPage()
    {
        $ideaOne = Idea::factory()->create([
            'title' => 'My First Idea',
            'description' => 'Description of my first idea',
        ]);

        $ideaTwo = Idea::factory()->create([
            'title' => 'My Second Idea',
            'description' => 'Description of my second idea',
        ]);

        $response = $this->get(route('idea.index'));

        $response->assertOk();

        $response->assertSee($ideaOne->title);
        $response->assertSee($ideaOne->description);

        $response->assertSee($ideaTwo->title);
        $response->assertSee($ideaTwo->description);
    }

    public function testItShowsOnTheShowPage()
    {
        $idea = Idea::factory()->create([
            'title' => 'My First Idea',
            'description' => 'Description of my first idea',
        ]);

        $response = $this->get(route('idea.show', $idea));

        $response->assertOk();

        $response->assertSee($idea->title);
        $response->assertSee($idea->description);
    }

    public function testPaginationWorks()
    {
        Idea::factory(Idea::PAGINATION_COUNT + 1)->create();

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
