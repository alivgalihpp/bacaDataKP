<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Negara extends Model
{
    use HasFactory;
    protected $table = "negara";

    public function kota()
    {
        return $this->hasOne('App\Models\Kota');
    }
}
