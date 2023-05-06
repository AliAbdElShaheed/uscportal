<?php

namespace Database\Seeders;

use App\Models\Supplier;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('suppliers')->delete();

        $suppliers = ['sAhmed', 'sMohammed', 'sYehia', 'sAbd Allah', 'sHager'];

        foreach ($suppliers as $supplier) {
            Supplier::create([
                'name' => $supplier,
                'phone' => '0102222',
                'address' => 'Menof',
            ]);
        } // End of Foreach

    } // End of Run

} // End of Seeder
