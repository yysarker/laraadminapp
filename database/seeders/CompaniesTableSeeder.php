<?php

    namespace Database\Seeders;

    use Illuminate\Database\Console\Seeds\WithoutModelEvents;
    use Illuminate\Database\Seeder;
    use Illuminate\Support\Facades\DB;
    use Faker\Factory as Faker;

    class CompaniesTableSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run ()
        {
            DB ::table ('companies') -> truncate ();

            $companies = [];
            $faker     = Faker ::create ();

            foreach (range (1, 60) as $index) {
                $companies[] = [
                    'name'       => $faker -> company,
                    'email'      => $faker -> email,
                    'logo'       => $faker -> imageUrl($width=300,$height=300, 'cats', false),
                    'website'    => $faker -> domainName,
                    'created_at' => Now (),
                    'updated_at' => Now (),
                ];
            }

            DB ::table ('companies') -> insert ($companies);
        }
    }
