<?php

namespace Database\Seeders;
use App\Models\Vendedore;
use Illuminate\Database\Seeder;

class VendedoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Vendedore::Factory(500)->create();
        //
    }
}
