<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    public function subProjects()
    {
        return $this->hasMany(SubProject::class)->orderBy('id');
    }
}
