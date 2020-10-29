<?php

namespace App\Models;

use App\Traits\UuidsTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sairler extends Model
{
    use HasFactory;
    use UuidsTrait;
    use SoftDeletes; // artık delete işlemleri soft olarak gerçekleşecek.


}
