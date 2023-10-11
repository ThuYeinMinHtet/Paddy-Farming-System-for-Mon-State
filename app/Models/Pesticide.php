<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesticide extends Model
{
    use HasFactory;
    
    public function paddybug()
    {
        return $this->belongsTo("App\Models\PaddyBugs");
    }
}
