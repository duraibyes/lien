<?php

namespace Database\Seeders;

use App\Models\ProjectType;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ProjectTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.

     *

     * @return void
     */
    public function run()
    {
        $now = Carbon::now();

        //Insert values to seed table

        $names = [
            'Private',
            'Public',
            'Federal',
        ];

        foreach ($names as $name) {
            ProjectType::firstOrCreate(
                ['project_type' => $name],
                ['created_at' => $now, 'updated_at' => $now]
            );
        }
    }
}
