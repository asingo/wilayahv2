<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postal extends Model
{
    use HasFactory;
    protected $table = 'ec_postalcode';
    protected $primaryKey = 'id';
}
