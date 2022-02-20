<?php

namespace Tests\Unit;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @dataProvider data
     * @return void
     */
    public function testItCanGenerateGravatarDefaultImageWhenNoEmailFound($num)
    {
        $user = User::factory()->create([
            'name' => 'jake',
            'email' => 'afakeemail@gmail.com',
        ]);

        $gravatarUrl = $user->getAvatar();

        $this->assertEquals(
            'https://www.gravatar.com/avatar/' . md5($user->email) . '?s=200&d=https://s3.amazonaws.com/laracasts/images/forum/avatars/default-avatar-' . $num . '.png',
            $gravatarUrl
        );
    }

    public function data(): array
    {
        return [
            [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36]
        ];
    }
}
