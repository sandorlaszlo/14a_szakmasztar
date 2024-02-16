<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCompetitorRequest;
use App\Http\Requests\UpdateCompetitorRequest;
use App\Http\Resources\CompetitorResource;
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
        return CompetitorResource::collection(Competitor::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCompetitorRequest $request)
    {
        $request->validated();

        $competitor = Competitor::create($request->all());

        return response()->json(new CompetitorResource($competitor), 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Competitor $competitor)
    {
        return new CompetitorResource($competitor);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCompetitorRequest $request, Competitor $competitor)
    {
        $request->validated();

        $competitor->update($request->only(['name', 'professionId','schoolName', 'birthDate', 'hostel', 'avatarUrl']));

        return new CompetitorResource($competitor);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Competitor $competitor)
    {
        $competitor->delete();

        return response()->noContent();
    }
}
