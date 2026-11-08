<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Technology;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {

        $technologies = Technology::all();

        return response()->json(

            [
                "success" => true,
                "data" => 'tutto funziona come dovrebbe'
            ]
        );
    }

     public function show(Project $project)
    {
            $project->load('category','technologies');

              return response()->json(

            [
                "success" => true,
                "data" => $project
            ]
        );
    }
}
