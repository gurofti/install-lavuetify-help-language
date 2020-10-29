<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Arac extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function aracSinifi(){
        return $this->hasOne(AracSinifi::class, 'id','sinif_id');
    }
}
