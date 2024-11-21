<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComponentField extends Model
{
    use HasFactory;

    protected $fillable = ['component_id', 'field_name'];

    public function component()
    {
        return $this->belongsTo(Component::class);
    }

    public function values()
    {
        return $this->hasMany(ComponentFieldValue::class);
    }
}
