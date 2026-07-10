<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\SubProject;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProjectController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Project = Project::with('subProjects')->orderBy('id', 'DESC')->get();
        return view("Project.Project", compact("Project"));
    }

    public function public(Request $request)
    {
        $description = $request->route('description');
        $Project = Project::with('subProjects.docs')->where('detail', $description)->first();

        if (! $Project) {
            abort(404);
        }

        return view('Project.Project_detail', compact('Project'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Project = Project::with('subProjects')->orderBy('id', 'DESC')->get();
        return view("Project.Projecttable", compact("Project"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $Project = new Project;

        // Asignación básica de campos
        $Project->title = Str::upper($request->title);
        $Project->description = $request->description;
        $Project->detail = $request->detail;
        $Project->location = $request->location;
        $Project->land = $request->land;
        $Project->land_count = $request->land_count;

        $Project->country = $request->country;


        // Manejo de la imagen principal
        if ($request->file('image_1') != null) {
            $Project->image_1 = fileStore($request->file('image_1'), "resource");
        }

        // Manejo de mapas (map_1 y map_2)
        for ($i = 1; $i <= 2; $i++) {
            $mapField = "map_$i";
            if ($request->file($mapField) != null) {
                $Project->$mapField = fileStore($request->file($mapField), "resource");
            }
        }

        // Manejo de videos (video_1 a video_10)
        for ($i = 1; $i <= 10; $i++) {
            $videoField = "video_$i";

            $Project->$videoField = $request->$videoField;
        }

        $Project->save();
        $this->syncSubProjects($Project, $request);

        // Manejo de turistas y sus imágenes (tourist_1 a tourist_6 y tourist_image_1 a tourist_image_6)
        for ($i = 1; $i <= 6; $i++) {
            $touristField = "tourist_$i";
            $touristImageField = "tourist_image_$i";

            if ($request->$touristField) {
                $Project->$touristField = Str::title($request->$touristField);
            }

            if ($request->file($touristImageField) != null) {
                $Project->$touristImageField = fileStore($request->file($touristImageField), "resource");
            }
        }

        // Guardar en la base de datos
        $Project->save();

        // Retornar la vista de creación
        return $this->create();
    }


    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $Project = Project::with('subProjects')->find($request->id);
        return $Project;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $Project = Project::find($request->id);
        // Asignación básica de campos
        $Project->title = Str::upper($request->title);
        $Project->description = $request->description;
        $Project->detail = $request->detail;
        $Project->location = $request->location;
        $Project->land = $request->land;
        $Project->land_count = $request->land_count;

        $Project->country = $request->country;


        // Manejo de la imagen principal
        if ($request->file('image_1') != null) {
            $Project->image_1 = fileStore($request->file('image_1'), "resource");
        }

        // Manejo de mapas (map_1 y map_2)
        for ($i = 1; $i <= 2; $i++) {
            $mapField = "map_$i";
            if ($request->file($mapField) != null) {
                $Project->$mapField = fileStore($request->file($mapField), "resource");
            }
        }

        // Manejo de videos (video_1 a video_10)
        for ($i = 1; $i <= 10; $i++) {
            $videoField = "video_$i";

            $Project->$videoField = $request->$videoField;
        }

        $Project->save();
        $this->syncSubProjects($Project, $request);

        // Manejo de turistas y sus imágenes (tourist_1 a tourist_6 y tourist_image_1 a tourist_image_6)
        for ($i = 1; $i <= 6; $i++) {
            $touristField = "tourist_$i";
            $touristImageField = "tourist_image_$i";

            if ($request->$touristField) {
                $Project->$touristField = Str::title($request->$touristField);
            } else {
                $Project->$touristField = null;
            }

            if ($request->hasFile($touristImageField)) {
                $Project->$touristImageField = fileStore($request->file($touristImageField), "resource");
            }
        }


        // Guardar en la base de datos
        $Project->save();

        // Retornar la vista de creación
        return $this->create();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $table = Project::with('subProjects.docs')->find($request["id"]);

        if ($table) {
            // Eliminar imagen principal
            fileDestroy($table->image_1, "resource");

            // Eliminar mapas
            for ($i = 1; $i <= 2; $i++) {
                $mapField = "map_$i";
                if ($table->$mapField) {
                    fileDestroy($table->$mapField, "resource");
                }
            }

            // Eliminar imágenes turísticas
            for ($i = 1; $i <= 6; $i++) {
                $touristImageField = "tourist_image_$i";
                if ($table->$touristImageField) {
                    fileDestroy($table->$touristImageField, "resource");
                }
            }

            foreach ($table->subProjects as $subProject) {
                $this->deleteSubProjectAssets($subProject);

                foreach ($subProject->docs as $doc) {
                    if ($doc->pdf) {
                        fileDestroy($doc->pdf, "resource");
                    }
                }
            }
            // Eliminar el registro de la base de datos
            $table->delete();
        }

        // Redirigir al método create
        return $this->create();
    }

    private function syncSubProjects(Project $project, Request $request): void
    {
        $existingSubProjects = $project->subProjects()->orderBy('id')->get()->values();

        for ($i = 1; $i <= 20; $i++) {
            $subprojectField = "subproject_$i";
            $subProjectImageField = "subproject_image_$i";
            $photoField = "photo_$i";

            $subProject = $existingSubProjects->get($i - 1);
            $name = trim((string) $request->input($subprojectField, ''));

            $hasImage = $request->hasFile($subProjectImageField);
            $hasPhoto = $request->hasFile($photoField);

            if (! $subProject && $name === '' && ! $hasImage && ! $hasPhoto) {
                continue;
            }

            if (! $subProject) {
                $subProject = new SubProject();
                $subProject->project_id = $project->id;
            }

            $subProject->name = $name !== '' ? Str::upper($name) : null;

            if ($hasImage) {
                $newImage = fileStore($request->file($subProjectImageField), 'resource');
                $this->deleteStoredFile($subProject->image);
                $subProject->image = $newImage;
            }

            if ($hasPhoto) {
                $newPhoto = fileStore($request->file($photoField), 'resource');
                $this->deleteStoredFile($subProject->photo);
                $subProject->photo = $newPhoto;
            }

            if (blank($subProject->name) && blank($subProject->image) && blank($subProject->photo)) {
                if ($subProject->exists) {
                    $this->deleteSubProjectAssets($subProject);
                    $subProject->delete();
                }

                continue;
            }

            $subProject->save();
        }

        $existingSubProjects->slice(20)->each(function (SubProject $subProject) {
            $this->deleteSubProjectAssets($subProject);
            $subProject->delete();
        });
    }

    private function deleteSubProjectAssets(SubProject $subProject): void
    {
        $this->deleteStoredFile($subProject->image);
        $this->deleteStoredFile($subProject->photo);
    }

    private function deleteStoredFile(?string $path): void
    {
        if ($path) {
            fileDestroy($path, 'resource');
        }
    }
}
