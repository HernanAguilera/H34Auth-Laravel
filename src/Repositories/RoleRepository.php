<?php

namespace H34\Auth\Repositories;

use H34\Auth\Models\Role;
use H34\Core\Repositories\RepositoryContract;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class RoleRepository implements RepositoryContract
{
    public static function getAll(array $filters=[]): array|Collection {
        return Role::all();
    }

    public static function getone(int|string $id): Model {
        return Role::find($id);
    }
}
