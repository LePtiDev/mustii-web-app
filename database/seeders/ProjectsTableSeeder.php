<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        DB::table('projects')->truncate();
        Project::factory()->times(50)->create();

        Model::reguard();
    }
}
