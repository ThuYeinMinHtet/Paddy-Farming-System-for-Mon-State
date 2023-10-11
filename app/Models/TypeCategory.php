<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeCategory extends Model
{
    use HasFactory;
    
    public function paddytype()
    {
        return $this->hasMany("App\Models\PaddyType");
    }
}
