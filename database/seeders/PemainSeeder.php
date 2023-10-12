<?php

namespace Database\Seeders;

use App\Models\Pemain;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PemainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pemain::factory(15)->create();
    }
}
