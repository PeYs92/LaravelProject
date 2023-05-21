<?php

namespace App\Http\Controllers;

use App\Models\PeopleModel;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index()
    {
        $element = PeopleModel::all();

        return response()->json($element);
    }

    public function show($id)
    {
        $element = PeopleModel::find($id);

        if (!$element) {
            return response()->json(['error' => 'Person not found'], 404);
        }

        return response()->json($element);
    }

    public function store(Request $request)
    {
        $element = PeopleModel::create($request->all());

        return response()->json($element, 201);
    }

    public function update(Request $request, $id)
    {
        $element = PeopleModel::find($id);

        if (!$element) {
            return response()->json(['error' => 'Person not found'], 204);
        }

        $element->update($request->all());

        return response()->json($element);
    }

    public function destroy($id)
    {
        $element = PeopleModel::find($id);

        if (!$element) {
            return response()->json(['error' => 'Person not found'], 204);
        }

        $element->delete();

        return response()->json(['message' => 'Person deleted']);
    }
}