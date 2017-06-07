<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker\Factory::create();
      $data = [ 'name' => 'admin', 'email' => 'admin@mail.com', 'password' => bcrypt('password')];
      DB::table('users')->insert($data);

      for ($i=0; $i < 100; $i++) {
        App\User::create([
          'name' => $faker->name,
          'email' => $faker->email,
          'password' => bcrypt('password')
        ]);
      }
    }
}
