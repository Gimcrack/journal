<?php

namespace Tests\Feature;

use App\Post;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ViewPostTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    function a_user_can_view_a_post()
    {
        // Create a post
        $post = Post::create([
            'topic' => 'A fake topic',
            'body' => 'A fake body',
        ]);

        // View the post
        $response = $this->get("/posts/{$post->id}");

        $response->assertStatus(200);

        // See the post
        $response->assertSee('A fake topic');
        $response->assertSee('A fake body');
    }
}
