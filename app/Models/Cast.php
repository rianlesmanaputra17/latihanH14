<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cast extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function peran()
    {
        return $this->hasMany(Peran::class);
    }
}
