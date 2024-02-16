<?php

namespace App\Http\Controllers;

use App\Models\Competitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CompetitorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return Competitor::all();
        return Competitor::with('profession')->get();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'professionId' =>'required',
            'name' =>'required',
            'hostel' =>'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => 'Hiányos adatok.'], 400);
        }

        $competitor = Competitor::create($request->all());

        return response()->json(['id' => $competitor->id], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Competitor $competitor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Competitor $competitor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $competitor = Competitor::find($id);

        if (is_null($competitor)) {
            return response()->json(['error' => "A megadott azonosítóval versenyző nem létezik"], 404);
        }

        $competitor->delete();
        return response()->noContent();
    }
}
