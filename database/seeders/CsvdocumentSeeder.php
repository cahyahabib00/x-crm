<?php

namespace Database\Seeders;

use App\models\csvdocument;
use Illuminate\Database\Seeder;

class CsvdocumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        csvdocument::factory(100)->create();

        csvdocument::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'addres' => 'indonesia',
        ]);
    }
}
