<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class SubscribePolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Check user is subscribe or not
     *
     * @return true
     */

    public function subscribeOnly($user){
//        return $user->subscribe;
        if($user->subscribe == 1){
            return true;
        }
        return false;
    }

}
