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
        $this->call(UsersTableSeeder::class);
        $this->call(CharactersTableSeeder::class);
        $this->call(BushusTableSeeder::class);
        $this->call(ExplanationsTableSeeder::class);
        $this->call(PronunciationsTableSeeder::class);
    }
}
