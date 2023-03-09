<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Schema;
//use Nette\Schema\Schema;
use Tests\TestCase;

class DatabaseTest extends TestCase
{
    /** @test
     * A basic feature test example.
     *
     * @return void
     */
    public function is_user_migrate_correct()
    {
        $this->assertTrue(
            Schema::hasColumns('users', [
                'name','surname','email','password'
            ]), 1);

    }
    /** @test
     *
     *
     *@returns void
     */
    public function nextTest(){
        $user = User::factory()->create();
        $this->assertModelExists($user);

        $user->delete();
        $this->assertModelMissing($user);
    }
}
