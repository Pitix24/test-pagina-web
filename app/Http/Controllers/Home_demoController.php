<?php

namespace App\Http\Controllers;
use App\Models\Section;
use Illuminate\Http\Request;

class Home_demoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
    public function home()
    {
        $section_template = Section::where("module","=","1")->orderBy("nivel","asc")->get();
        $section = Section::where("module","=","2")->orderBy("nivel","asc")->get();
        return view('home_demo.home',compact('section',"section_template"));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
