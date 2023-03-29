<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('categories')->insert([
        //     'name' => 'Remessa Parcial'
        // ]);
        // DB::table('categories')->insert([
        //     'name' => 'Remessa'
        // ]);

        $data = [
            ['name' => 'Remessa Parcial'],
            ['name' => 'Remessa'],
        ];

        $insert_data = [];
        $time_stamp = Carbon::now();
        foreach ($data as $d) {
            $d['created_at'] = $time_stamp;
            $insert_data[] = $d;
        }
        Category::insert($insert_data);
    }
}
