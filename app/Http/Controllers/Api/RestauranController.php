<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Restauran;
use App\Http\Resources\RestauranResource;
use App\Http\Requests\RestauranStoreRequest;

class RestauranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return RestauranResource::collection(Restauran::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RestauranStoreRequest $request)
    {
        $created_restauran = Restauran::create($request->validated());

        return new RestauranResource($created_restauran);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Restauran $restauran)
    {
        return new RestauranResource($restauran);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RestauranStoreRequest $request, Restauran $restauran)
    {
        $restauran->update($request->validated());
        
        return new RestauranResource($restauran);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Restauran $restauran)
    {
        $restauran->delete();
        
        return response(null,Response::HTTP_NO_CONTENT);
    }
}
