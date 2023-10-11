<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class PaddyBugs extends Model
{
    use HasFactory;
    public function pesticides(){
        return $this->hasMany("App\Models\Pesticide");
    }


}
