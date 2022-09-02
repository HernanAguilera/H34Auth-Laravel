<?php

namespace H34\Auth\Repositories;

use H34\Auth\Models\Permission;
use H34\Core\Repositories\RepositoryContract;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class PermissionRepository implements RepositoryContract
{
    public static function getAll(array $filters = []): array|Collection
    {
        return Permission::all();
    }

    public static function getOne(int|string $id): Model
    {
        return Permission::find($id);
    }
}
