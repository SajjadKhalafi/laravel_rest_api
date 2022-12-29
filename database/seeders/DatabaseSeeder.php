<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

//         \App\Models\User::factory()->create([
//             'name' => 'sajjad',
//             'email' => 'iamsajjadkhalafi@gmail.com',
//             'password' => Hash::Make(12345678)
//         ]);
        $this->call(BookSeeder::class);
    }
}
