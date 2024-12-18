<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Request\ValidatePermissionRequest;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Permission::all(), 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ValidatePermissionRequest $request)
    {
        $permission = Permission::create(['name' => $request->name]);
        return response()->json($permission, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $permission = Permission::findOrFail($id);
        return response()->json($permission, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ValidatePermissionRequest $request, string $id)
    {
        $permission = Permission::findOrFail($id);
        $permission->update(['name' => $request->name]);
        return response()->json($permission, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $permission = Permission::findOrFail($id);
        $permission->delete();
        return response()->json(['message' => 'Permission deleted'], 200);

    }
}
