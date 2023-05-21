<?php

namespace App\Http\Controllers;

use App\Models\PeopleModel;

use Illuminate\Http\Request;

class PeopleController extends Controller
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

    public function post(Request $request)
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

        $res=PeopleModel::where('ID',$id)->update($request->all());

        return response()->json($element);
    }

    public function destroy($id)
    {
        $element = PeopleModel::find($id);

        if (!$element) {
            return response()->json(['error' => 'Person not found'], 204);
        }

        $res=PeopleModel::where('ID',$id)->delete();

        if ($res)
            return response()->json(['message' => 'Person deleted']);
        else 
            return response()->json(['error' => 'can not Person deleted']);
    }
}