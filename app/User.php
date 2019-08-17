<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password'
    ];

    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}
