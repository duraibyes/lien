<?php

namespace Database\Seeders;

use App\Models\CustomerCode;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CustomerCodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run(): void
    {
        $now = Carbon::now();

        $names = [

            'Owner',

            'General Contractor',

            'Sub Contractor',

            'Lessor of equipment',

            'Sub-Sub Contractor',

        ];

        foreach ($names as $name) {
            CustomerCode::firstOrCreate(
                ['name' => $name],
                ['created_at' => $now, 'updated_at' => $now]
            );
        }
    }
}
