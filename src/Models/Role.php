<?php

namespace H34\Auth\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function users() {
        return $this->belongsToMany(User::class, 'role_user');
    }

    public function permissions() {
        return $this->belongsToMany(Permission::class, 'permission_role');
    }
}
