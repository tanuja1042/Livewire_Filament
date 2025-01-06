<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use App\Http\Requests\ValidateBrandRequest;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brands = Brand::all();
        return response()->json($brands, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ValidateBrandRequest $request)
    {
        $data = $request->validated();
        
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('brands', 'public');
            $data['image'] = $imagePath;
        }
        // dd($request->all());
        $brands = Brand::create([
            'name' => $data['name'],
            'slug' => \Str::slug($data['name']),
            'image' => $data['image'] ?? null,
            'is_active' => $data['is_active'] ?? true,
        ]);

        return response()->json($brands, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $brands = Brand::findOrFail($id);
        return response()->json($brands, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ValidateBrandRequest $request, string $id)
    {
        $brands = Brand::findOrFail($id);
        $data = $request->validated();

        $brands->update([
            'name' => $data['name'],
            'slug' => \Str::slug($data['name']),
            'image' => $data['image'] ?? $brands->image,
            'is_active' => $data['is_active'] ?? $brands->is_active,
        ]);

        return response()->json($brands, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $brands = Brand::findOrFail($id);
        $brands->delete();

        return response()->json(['message' => 'Brands deleted successfully'], 200);
    }
}
