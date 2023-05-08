<?php

namespace App\Http\Controllers;

use App\Http\Resources\TripResource;
use App\Models\Trip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TripController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return TripResource::collection(Trip::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'description' => 'string',
            'end_date' => 'required|date',
            'start_date' => 'required|date',

            'user_id' => 'required|exists:users,id',
            'destination_id' => 'required|exists:destinations,id',

        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $p = Trip::create($request->all());

        return new TripResource($p);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $p = Trip::find($id);
        return new TripResource($p);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function edit(Trip $trip)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $p = Trip::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'title' => 'max:255',
            'description' => 'string',
            'end_date' => 'date',
            'start_date' => 'date',

            'user_id' => 'exists:users,id',
            'destination_id' => 'exists:destinations,id',

        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $p->update($request->all());

        return new TripResource($p);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $p = Trip::find($id);
        if($p){
            $p->delete();
            return response()->json([
                'message' => 'Putovanje je uspešno obrisano.'
            ], 200);
        }else{
            return response()->json([
                'message' => 'Putovanje nije pronađeno.'
            ], 404);
        }
    }
}
