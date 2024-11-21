<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComponentFieldValue extends Model
{
    use HasFactory;

    protected $fillable = ['component_field_id', 'value'];

    public function field()
    {
        return $this->belongsTo(ComponentField::class);
    }
}
