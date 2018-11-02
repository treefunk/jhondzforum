<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ThreadTest extends TestCase
{
    use DatabaseMigrations;

    public function setUp()
    {
        parent::setUp();
        $this->thread = factory('App\Thread')->create();
    }


    /**
     * walang owner!
     *  @test
     * */
    public function a_thread_has_an_owner()
    {
        $thread = factory('App\Thread')->create();

        $this->assertInstanceOf('App\User',$thread->owner);
    }

    /** @test */
    public function a_thread_can_add_a_reply()
    {
        $this->thread->addReply([
            'body' => 'test',
            'user_id' => 1
        ]);

        $this->assertCount(1,$this->thread->replies);
    }
}
