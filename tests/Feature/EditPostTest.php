<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class EditPostTest extends TestCase
{
    use RefreshDatabase;

    public function test_authenticated_user_can_access_edit_route_for_id_one(): void
    {
        $user = User::factory()->create();

        $this->actingAs($user)
            ->get('/post/1/edit')
            ->assertOk()
            ->assertSeeText('Berhasil! Anda berhak mengedit postingan ini karena Anda adalah pemiliknya.');
    }

    public function test_authenticated_user_gets_forbidden_for_edit_route_with_other_ids(): void
    {
        $user = User::factory()->create();

        $this->actingAs($user)
            ->get('/post/2/edit')
            ->assertForbidden();
    }
}
