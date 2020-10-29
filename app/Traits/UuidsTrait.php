<?php


namespace App\Traits;


trait UuidsTrait
{
    public $incrementing = false;

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->{$model->getKeyName()} = \Ramsey\Uuid\Uuid::uuid1()->toString();
        });
    }
}
