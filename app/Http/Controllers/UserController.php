<?php

namespace App\Http\Controllers;

use App\User;
use App\Project;
use App\Note;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return response()->json($users);
    }

    public function store(UserRequest $request)
    {
        $user = User::create($request->all());

        return response()->json($user);
    }

    public function show(int $id)
    {
        $user = User::findOrFail($id);

        return response()->json($user);
    }

    public function update(Request $request, int $id)
    {
        $user = User::findOrFail($id);
        $user->update($request->all());

        return response()->json($user);
    }

    public function destroy(int $id)
    {
        $user = User::findOrFail($id);
        $projects = Project::where('user_id', $user->id)->get();

        foreach ($projects as $projectValue) {
            $projectValue->delete();
            Note::where('id', $projectValue->note_id)->delete();
        }

        $user->delete();

        return response()->json($user);
    }
}
