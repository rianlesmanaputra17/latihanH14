<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function kritik()
    {
        return $this->hasMany(Kritik::class);
    }

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }

    public function peran()
    {
        return $this->hasMany(Peran::class);
    }
}
