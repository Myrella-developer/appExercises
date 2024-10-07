<?php

namespace App\Http\Controllers;
use App\Models\Exercises;
use Illuminate\Http\Request;

class ExercisesController extends Controller
{
    public function store(Request $request) {
        $exercises = Exercises::create($request->all());
        return response()->json($exercises, 201);
    }

    public function index() {
        $exercises = Exercises::all();
        return response()->json($exercises, 200);
    }

    public function joinExercises($id) {
        $exercises = Exercises::find($id);
        if(!$exercises) {
            return response()->json(['message' => 'Activity not found'], 404);
        }
        return response()->json(['message' => 'The workout session has been successfully booked'], 200);
    }

    public function export() {
        $exercises = Exercises::all();
        return response()->json($exercises, 200);
    }

    public function import(Request $request) {
        $exercisesData = $request->json()->all();
        foreach ($exercisesData as $exercise) {
            Exercises::create($exercise);
        }
        return response()->json(['message' => 'Exercises imported succesfully'], 201);
    }
}
