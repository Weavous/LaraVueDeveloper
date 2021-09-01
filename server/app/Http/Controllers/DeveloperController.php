<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

use App\Http\Resources\DeveloperResource;

use Illuminate\Support\Facades\Validator;

use App\Models\Developer;

class DeveloperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): JsonResponse
    {
        return response()->json(
            DeveloperResource::collection(Developer::all())
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request): JsonResponse
    {
        $validator = $this->validator($request);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $resource = Developer::create($validator->validated());

        return response()->json($resource, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id): JsonResponse
    {
        $resource = Developer::find($id);

        if ($resource instanceof Developer) {
            return response()->json(new DeveloperResource($resource));
        }

        return response()->json([], 404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        $validator = $this->validator($request);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $resource = Developer::find($id);

        if ($resource instanceof Developer) {
            $resource->update($validator->validated());

            return response()->json($resource);
        }

        return response()->json([], 400);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $resource = Developer::find($id);

        if ($resource instanceof Developer) {
            $resource->delete();

            return response()->json([], 204);
        }

        return response()->json([], 400);
    }

    private function validator(Request $request): \Illuminate\Validation\Validator
    {
        $validator = Validator::make($request->all(), [
            "name" => "required|regex:/^[A-Za-z\s]*$/i",
            "sex" => "required|in:M,F",
            "birthdate" => "required|regex:/^[0-9]{2,4}[\.\-\/]{1}[0-9]{2}[\.\-\/][0-9]{2,4}(\s{1}\d{2}:\d{2}:\d{2})?$/i",
            "hobby_id" => "required|exists:hobbies,id"
        ]);

        return $validator;
    }
}
