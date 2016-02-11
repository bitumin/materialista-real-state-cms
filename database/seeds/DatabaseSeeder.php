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
        $this->call(ConstantsSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(OptionsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);

        if(\App::environment() == 'local')
            $this->call(AdsTableSeeder::class);
    }
}
