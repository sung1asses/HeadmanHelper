<?php

use Illuminate\Database\Seeder;

use App\Models\Post;
use App\Models\Message;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        factory(Post::class, 50)->create();
        factory(Message::class, 50)->create();
    }
}
