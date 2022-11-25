<?php

namespace App\Http\Controllers\Api;

use App\Models\Jacket;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class JacketController extends Controller
{
    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin')->except(['index', 'show']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jackets = Jacket::latest()->get();

        if (count($jackets) > 0) {
            return response()->json([
                'code' => 202,
                'status' => 'success',
                'message' => 'data successfully accepted',
                'data' => $jackets
            ], 202);
        }

        return response()->json([
            'code' => 202,
            'status' => 'success',
            'message' => 'data successfully accepted',
            'data' => 'no data available'
        ], 202);
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
            'name' => ['required','string','max:255'],
            'type' => ['required','string','max:255'],
            'brand' => ['required','string','max:255'],
            'color' => ['required','string','max:255']
        ]);

        if ($validator->fails()) {
            return response()->json([
                'code' => 422,
                'status' => 'error',
                'message' => 'data not match with our validation',
                'data' => $validator->errors()
            ], 422);
        }

        $jacket = Jacket::create($validator->getData());

        return response()->json([
            'code' => 202,
            'status' => 'success',
            'message' => 'data successfully created',
            'data' => $jacket
        ], 202);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jacket = Jacket::find($id);

        if (!$jacket) {
            return response()->json([
                'code' => 404,
                'status' => 'error',
                'message' => 'data not found in our database'
            ], 404);
        }

        return response()->json([
            'code' => 206,
            'status' => 'success',
            'message' => 'data successfully accepted',
            'data' => $jacket
        ], 206);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['nullable','string','max:255'],
            'type' => ['nullable','string','max:255'],
            'brand' => ['nullable','string','max:255'],
            'color' => ['nullable','string','max:255']
        ]);

        if ($validator->fails()) {
            return response()->json([
                'code' => 422,
                'status' => 'error',
                'message' => 'data not match with our validation',
                'data' => $validator->errors()
            ], 422);
        }

        $jacket = Jacket::find($id);
        $jacket->update($validator->getData());

        return response()->json([
            'code' => 202,
            'status' => 'success',
            'message' => 'data successfully updated',
            'data' => $jacket
        ], 202);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Jacket::find($id)->delete();

        $jackets = Jacket::get();

        if (count($jackets) > 0) {
            return response()->json([
                'code' => 202,
                'status' => 'success',
                'message' => 'data successfully removed',
                'data' => $jackets
            ], 202);
        }

        return response()->json([
            'code' => 202,
            'status' => 'success',
            'message' => 'data successfully removed',
            'data' => 'no data available'
        ], 202);
    }
}