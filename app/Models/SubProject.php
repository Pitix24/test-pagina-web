<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\SubprojectDoc;

class SubProject extends Model
{
    protected $fillable = ['project_id', 'name', 'image', 'photo'];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function docs()
    {
        return $this->hasMany(SubprojectDoc::class, 'sub_project_id');
    }
}
