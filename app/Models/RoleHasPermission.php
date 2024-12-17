<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoleHasPermission extends Model
{
    protected $table = 'role_has_permissions';

    // public $timestamps = false;
    public $incrementing = false; // No primary key
    public $timestamps = false;  // Disable timestamps

    protected $fillable = [
        'role_id',
        'permission_id',
    ];

    // Define composite key for the table
    protected $primaryKey = null;

     /**
     * Get a unique key for each record by combining role_id and permission_id.
     */
    public function getKey(): string
    {
        return $this->role_id . '_' . $this->permission_id;
    }
}
