<?php

namespace Database\Seeders;

use App\Models\ProjectRole;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ProjectRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.

     *

     * @return void
     */
    public function run()
    {
        //truncate the roles table

        $now = Carbon::now();

        //Insert values to seed table

        $names = [

            'Original Contractor',

            'Subcontractor',

            'Supplier',

            'Lessor of Equipment',
        ];

        foreach ($names as $name) {
            ProjectRole::firstOrCreate(
                ['project_roles' => $name],
                ['created_at' => $now, 'updated_at' => $now]
            );
        }
    }
}
