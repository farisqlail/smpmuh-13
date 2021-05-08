<?php

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
        $this->call(UsersTableSeeder::class);
        $this->call(KontakTableSeeder::class);
        $this->call(TentangTableSeeder::class);
        $this->call(KarakterTableSeeder::class);
        $this->call(VisiTableSeeder::class);
        $this->call(AkreditasiTableSeeder::class);
        $this->call(BeasiswaTableSeeder::class);
        $this->call(KurikulumTableSeeder::class);
        $this->call(DeskEkstraTableSeeder::class);
        $this->call(KategoriEkstraTableSeeder::class);
    }
}
