<?php

namespace App\Http\Controllers;

use App\Note;
use App\Http\Requests\NoteRequest;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function index()
    {
        $notes = Note::all();

        return response()->json($notes);
    }

    public function store(NoteRequest $request)
    {
        $note = Note::create($request->all());

        return response()->json($note);
    }

    public function show($id)
    {
        $note = Note::find($id);

        return response()->json($note);
    }

    public function update(Request $request, $id)
    {
        $note = Note::findOrFail($id);
        $note->update($request->all());

        return response()->json($note);
    }

    public function destroy(int $id)
    {
        $note = Note::find($id);

        return response()->json($note);
    }
}
