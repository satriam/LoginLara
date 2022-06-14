<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Faker\Provider\id_ID;

class datafake extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for($i = 1 ; $i <= 10 ; $i++){
            DB::table('fake')->insert([
                'name' => $faker->Name,
                'email'     => $faker->email,
                'password' => $faker->password,
                'created_at' => \Carbon\Carbon::now(),
                'Updated_at' => \Carbon\Carbon::now()
            ]);
        } 
    }
}
