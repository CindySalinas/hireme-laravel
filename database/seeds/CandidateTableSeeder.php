<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use HireMe\Entities\User;
use HireMe\Entities\Candidate;
use Illuminate\Support\Str;

class CandidateTableSeeder extends Seeder
{
    public function run()
    {
    	foreach (range(1, 80) as $index) {
    		$faker = Faker::create();
    		$fullName = $faker->name;
    		$user = User::create([
    			'name' => $fullName,
    			'email' => $faker->email,
    			'password' => \Hash::make(123456),
    			'type'=> 'candidate'
    		]);
    		Candidate::create([
    			'id' => $user-> id,
    			'website_url' => $faker->url,
    			'description' => $faker->text(200),
    			'job_type' => $faker->randomElement(['full', 'partial', 'freelance']),
    			'category_id' => $faker->randomElement([1,2,3]),
    			'available' => true,
    			'slug' => str_slug($fullName)
    		]);
    	}
    }
}
