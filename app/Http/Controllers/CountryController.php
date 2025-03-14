<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    // ...existing code...

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255|unique:countries',
            'capital' => 'required|string|max:255',
            'population' => 'required|integer',
            'continent' => 'required|string|max:255',
            'sub_region' => 'nullable|string|max:255',
            'flag_url' => 'required|string|max:255',
            'motto' => 'nullable|string|max:255',
            'languages' => 'nullable|array',
            'additional_info' => 'nullable|string'
        ]);

        $country = Country::create($validatedData);

        return response()->json([
            'message' => 'Country created successfully',
            'data' => $country
        ], 201);
    }
}