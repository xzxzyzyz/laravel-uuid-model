<?php

namespace Xzxzyzyz\Laravel\Uuid;

use Illuminate\Database\Eloquent\Model as BaseModel;

class Model extends BaseModel
{
    use Behaviors\Assign;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'string';
}
