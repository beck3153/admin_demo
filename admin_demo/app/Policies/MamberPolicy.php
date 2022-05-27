<?php

namespace App\Policies;

use App\User;
use App\MambersPly;
use Illuminate\Auth\Access\HandlesAuthorization;

class MamberPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any mambers plies.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the mambers ply.
     *
     * @param  \App\User  $user
     * @param  \App\MambersPly  $mambersPly
     * @return mixed
     */
    public function view(User $user, MambersPly $mambersPly)
    {
        //
    }

    /**
     * Determine whether the user can create mambers plies.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the mambers ply.
     *
     * @param  \App\User  $user
     * @param  \App\MambersPly  $mambersPly
     * @return mixed
     */
    public function update(User $user, MambersPly $mambersPly)
    {
        $this->authorize('update', $mambersPly);
    }

    /**
     * Determine whether the user can delete the mambers ply.
     *
     * @param  \App\User  $user
     * @param  \App\MambersPly  $mambersPly
     * @return mixed
     */
    public function delete(User $user, MambersPly $mambersPly)
    {
        //
    }

    /**
     * Determine whether the user can restore the mambers ply.
     *
     * @param  \App\User  $user
     * @param  \App\MambersPly  $mambersPly
     * @return mixed
     */
    public function restore(User $user, MambersPly $mambersPly)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the mambers ply.
     *
     * @param  \App\User  $user
     * @param  \App\MambersPly  $mambersPly
     * @return mixed
     */
    public function forceDelete(User $user, MambersPly $mambersPly)
    {
        //
    }
}
