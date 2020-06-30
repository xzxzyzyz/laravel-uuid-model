<?php

namespace Xzxzyzyz\Laravel\Uuid\Behaviors;

use Illuminate\Database\Eloquent\Model;

trait Assign
{
    /**
     *  Setup model event hooks
     */
    public static function bootAssign()
    {
        static::creating(function (Model $model) {
            if (blank($model->{$model->getKeyName()})) {
                $model->{$model->getKeyName()} = (string) \Illuminate\Support\Str::orderedUuid();
            }
        });
    }
}
