<?php

use App\Models\Job;
use App\User;
use Illuminate\Database\Seeder;
use Faker\Factory;
use Illuminate\Support\Str;


class JobsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Job::truncate();
        Job::unguard();

        $faker = Factory::create();

        User::all()->each(function($user) use ($faker){
            foreach(range(1, 10) as $i){
            
                Job::create([
                    'user_id' => $user->getKey(),
                    'title' => $faker->sentence()
                ]); 
    
            }
        });
        
    }
}
