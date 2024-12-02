<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Component extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description'];

    public function fields()
    {
        return $this->hasMany(ComponentField::class);
    }
}
