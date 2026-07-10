<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubprojectDoc extends Model
{
    protected $table = 'sub_project_docs';
    protected $fillable = ['sub_project_id', 'pdf', 'titulo', 'subtitulo', 'icon'];

    public function subProject()
    {
        return $this->belongsTo(SubProject::class, 'sub_project_id');
    }
}
