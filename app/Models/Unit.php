<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Unit
 *
 * @author  Duwi haryanto <201232646@uii.ac.id>
 *
 * @OA\Schema(
 *     title="Unit model",
 *     description="Unit model",
 * )
 */

class Unit extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'unit';
    protected $fillable = [
        'unit', 'keterangan',
    ];
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [

    ];

    /**
     * @OA\Property(
     *     description="Nama unit",
     *     title="Nama unit",
     * )
     *
     * @var string
     */
    private $unit;

    /**
     * @OA\Property(
     *     format="string",
     *     description="Keterangan Unit",
     *     title="Keterangan Unit",
     * )
     *
     * @var string
     */
    private $keterangan;
}
