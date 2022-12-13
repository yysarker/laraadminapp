<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Company;
use App\Models\Contact;
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
        //\App\Models\User::factory(10)->create();
         \App\Models\User::factory()->create([
             'name' => 'Admin User',
             'email' => 'admin@admin.com',
             'password' => 'password',
         ]);

        $this->call ([
            CompaniesTableSeeder::class,
            ContactTableSeeder::class,
        ]);

    }
}
