<?php

namespace App\Http\Services;

use App\Models\User;
use Spatie\Permission\Models\Role;

class ACLService
{
    /**
     * @param User $user
     * @param array $roles
     */
    public function syncRoles(User $user, array $roles)
    {
        $user->syncRoles($roles);
    }

    /**
     * @param User $user
     * @param array $roles
     */
    public function assignRoles(User $user, array $roles)
    {
        $user->assignRole($roles);
    }

    /**
     * @param User $user
     * @param string $role
     */
    public function removeRole(User $user, string $role)
    {
        $user->removeRole($role);
    }

    /**
     * @param int $perPage
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function getRoles(int $perPage = 15): \Illuminate\Contracts\Pagination\LengthAwarePaginator
    {
        return Role::query()
            ->orderBy('id')
            ->paginate($perPage);
    }
}
