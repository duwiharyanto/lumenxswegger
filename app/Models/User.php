<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;

/**
 * Class User
 *
 *
 * @author  duwi <201232646@uii.ac.id>
 *
 * @OA\Schema(
 *     title="User model",
 *     description="User model",
 * )
 */


class User extends Model implements AuthenticatableContract, AuthorizableContract
{
    use Authenticatable, Authorizable, HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'user';
    protected $fillable = [
        'name', 'email', 'password',
    ];
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];


    /**
     * @OA\Property(
     *     description="Nama User",
     *     title="nama user",
     * )
     *
     * @var string
     */
    private $name;

    /**
     * @OA\Property(
     *     format="string",
     *     description="Password User",
     *     title="Password user",
     * )
     *
     * @var string
     */
    private $password;
    /**
     * @OA\Property(
     *     format="email",
     *     description="Email",
     *     title="Email user",
     * )
     *
     * @var string
     */
    private $email;
}
