<?php

namespace H34\Auth\Models;

use H34\Core\Traits\HasPackageFactory;
// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasPackageFactory;

    public $timestamps = false;

    public function users() {
        return $this->belongsToMany(User::class, 'permission_user');
    }

    public function roles() {
        return $this->belongsToMany(Role::class, 'permission_role');
    }
}
