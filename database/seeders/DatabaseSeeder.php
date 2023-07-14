<?php

namespace Database\Seeders;

use App\Models\Listing;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user=User::factory()->create([
            'name'=>'Partha Ghosh',
            'email'=>'partha.codelabfzc@gmail.com'
         ]);
        Listing::factory(8)->create([
            'user_id'=>$user->id


        ]);
    }
}
