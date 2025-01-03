<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use Illuminate\Http\Request;
class ProjectController extends Controller
{
 
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
          //
          $Project = Project::orderBy('id','DESC')->get();
          return view("Project.Project", compact("Project"));
    }
    public function projectDetail(Request $request)
    {
        $Project = Project::where("country", "=", $request->country)->first();
        if ($Project=="") {
            abort(404);
        }
        else{
            return view("Project.Project_detail",compact("Project"));

        }
        
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Project = Project::orderBy('id','DESC')->get();
        return view("Project.Projecttable", compact("Project"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $Project = new Project;
        $Project->title = $request->title;
        $Project->description = $request->description;
        $Project->detail = $request->detail;
        $Project->location = $request->location;
        $Project->country = $request->country;

             //file
             if ($request->file('image_1') != null) {
                $request->image_1 = fileStore($request->file('image_1'), "resource");
                $Project->image_1 = $request->image_1;
            }
        $Project->save();
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
        $Project=Project::find($request->id);
        return $Project;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $Project = Project::find($request->id);
        $Project->title = $request->title;
        $Project->description = $request->description;
        $Project->detail = $request->detail;
        $Project->location = $request->location;
        $Project->country = $request->country;
             //file
             if ($request->file('image_1') != null) {
                $request->image_1 = fileStore($request->file('image_1'), "resource");
                $Project->image_1 = $request->image_1;
            }
        $Project->save();
        return $this->create();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $table = Project::find($request["id"]);
        fileDestroy($table->image_1, "resource");
        Project::find($request->id)->delete();
        return $this->create();
    }
}
