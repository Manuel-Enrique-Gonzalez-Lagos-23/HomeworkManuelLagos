<?php

namespace Database\Seeders;
use App\Models\Proveedore;
use Illuminate\Database\Seeder;

class ProveedoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Proveedore::Factory(500)->create();
        //
    }
}
