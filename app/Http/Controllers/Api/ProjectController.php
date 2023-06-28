<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Technology;
use App\Models\Type;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){
        $projects = Project::with('type', 'technologies')->get();
        return response()->json($projects);
    }

    public function getTypes(){
        $types = Type::all();
        return response()->json($types);
    }

    public function getTechnologies(){
        $technologies = Technology::all();
        return response()->json($technologies);
    }

    public function getProjectsTechnology($id){
        $projects = Project::where('technology_id', $id);
        return response()->json($projects);
    }

    public function getProjectsType($id){
        $projects = Project::where('type_id', $id);
        return response()->json($projects);
    }

    public function getProjectDetail($slug){
        $project = Project::where('slug', $slug)->with('type', 'technologies')->first();
        return response()->json($project);
    }
}
