<?php
/**
 * Created by PhpStorm.
 * User: igroc
 * Date: 03.10.2018
 * Time: 12:36
 */

namespace app\services;

use app\models\User;

class UserService
{

    public function hasRole(string $role, User $user)
    {
        return $role === $user->role->role;
    }
}