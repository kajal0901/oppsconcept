<?php

namespace App\Repositories\Auth;


use App\User;
use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class RegisterRepository
{

    /**
     * @var Model
     */
    protected $model;

    /**
     * @param array $input
     *
     * @return User
     * @throws Exception
     */
    public function process(array $input): User
    {
        DB::beginTransaction();
        try {
            $createUser = $this->create($input);
            DB::commit();
            return $createUser;
        } catch (Exception $e) {
            DB::rollback();
            throw $e;
        }
    }

    /**
     * @param array $input
     *
     * @return User
     */
    public function create(array $input): User
    {
        return User::create(
            [
                'name' => $input['name'],
                'email' => $input['email'],
                'password' => Hash::make($input['password']),
            ]
        );
    }

}