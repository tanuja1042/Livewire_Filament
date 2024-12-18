<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Request\ValidateRoleRequest;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Role::all(), 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ValidateRoleRequest $request)
    {
        $role = Role::create(['name' => $request->name]);
        return response()->json($role, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $role = Role::findOrFail($id);
        return response()->json($role, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ValidateRoleRequest $request, string $id)
    {
        $role = Role::findOrFail($id);
        $role->update(['name' => $request->name]);
        return response()->json($role, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $role = Role::findOrFail($id);
        $role->delete();
        return response()->json(['message' => 'Role deleted'], 200);
    }

    // Add permissions to a role
    public function assignPermissions(ValidateRoleRequest $request, $id)
    {
        $role = Role::findOrFail($id);
        $request->validate(['permissions' => 'required|array']);

        $role->syncPermissions($request->permissions);
        return response()->json(['message' => 'Permissions assigned successfully'], 200);
    }

    // Get permissions of a role
    public function permissions($id)
    {
        $role = Role::findOrFail($id);
        return response()->json($role->permissions, 200);
    }
}
