<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $table = 'notes';
    protected $fillable = [
        'project_id',
        'type',
        'title',
        'description',
        'file_path',
        'created_at',
        'updated_at',
        'is_edited'
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
