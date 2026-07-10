<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class MigrateSubprojectsData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:migrate-subprojects-data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Iniciando migración de datos...');
        $projects = DB::table('projects')->get();

        foreach ($projects as $project) {
            for ($i = 1; $i <= 20; $i++) {
                $name = $project->{"subproject_$i"};
                $image = $project->{"subproject_image_$i"};
                $photo = $project->{"photo_$i"};

                // Solo insertamos si al menos uno de los tres campos tiene datos
                if (!empty($name) || !empty($image) || !empty($photo)) {
                    DB::table('sub_projects')->insert([
                        'project_id' => $project->id,
                        'name'       => $name,
                        'image'      => $image,
                        'photo'      => $photo,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);
                }
            }
        }
        $this->info('¡Migración de datos completada con éxito!');
    }
}
