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
        $this->call(PostsTableSeeder::class);
        $this->call(MessagesTableSeeder::class);
        $this->call(MessagesTableSeeder::class);
    }
}
