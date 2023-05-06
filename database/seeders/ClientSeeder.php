<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clients')->delete();

        $clients = ['Ahmed', 'Mohammed', 'Yehia', 'Abd Allah', 'Hager'];

        foreach ( $clients as $client)
        {
            Client::create([
               'name'       => $client,
               'phone'      => '0102222',
               'address'    => 'Menof',
            ]);
        } // End of Foreach


    } // End of Run

} // End of Seeder
