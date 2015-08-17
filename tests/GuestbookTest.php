<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use Faker\Factory;

class GuestbookTest extends TestCase {
    use DatabaseMigrations;
    use WithoutMiddleware;

    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testGuestbookPageWorks()
    {
        $this->visit('/')
             ->see('Guestbook');
    }

    public function testCanStoreAPost()
    {
        App\Post::create([
            'name' => 'Joe Bloggs',
            'email' => 'joe@example.com',
            'comment' => 'Lorem ipsum'
            ]);

        $this->seeInDatabase('posts', ['name' => 'Joe Bloggs']);
    }

    public function testCanPostAPost()
    {
        $faker = Factory::create();

        $name = $faker->name;
        $email = $faker->email;
        $comment = $faker->paragraph;

        $this->post('/api/posts', [
            'name' => $name,
            'email' => $email,
            'comment' => $comment
            ]);

        $this->seeInDatabase('posts', [
            'name' => $name,
            'email' => $email,
            ]);
    }
}
