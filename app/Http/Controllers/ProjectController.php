<?php

namespace App\Http\Controllers;

use App\User;
use App\Project;
use App\Http\Requests\ProjectRequest;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();

        return response()->json($projects);
    }

    public function store(ProjectRequest $request)
    {
        $project = Project::create($request->all());

        return response()->json($project);
    }

    public function show(int $id)
    {
        $project = Project::findOrFail($id);

        return response()->json($project);
    }

    public function user(int $id)
    {
        $project = User::where('user_id', $id);

        return response()->json($project);
    }

    public function update(Request $request, int $id)
    {
        $project = Project::findOrFail($id);
        $project->update($request->all());

        return response()->json($project);
    }

    public function destroy($id)
    {
        $project = Project::findOrFail($id)->delete();

        return response()->json($project);
    }
}
