<?php

use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Eloquent::unguard();

        $faker = Faker\Factory::create();
        factory(App\Answer::class, 100)->create();
        factory(App\Kerja::class, 100)->create();
        factory(App\Lulus::class, 100)->create();
        factory(App\Nikah::class, 100)->create();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
