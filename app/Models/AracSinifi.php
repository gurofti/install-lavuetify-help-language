<?php

namespace App\Models;

use Askedio\SoftCascade\Traits\SoftCascadeTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AracSinifi extends Model
{
    use SoftDeletes, SoftCascadeTrait;

    protected $softCascade = ['araclar'];

    public function araclar(){
        return $this->hasMany(Arac::class, 'sinif_id','id');
    }
}
