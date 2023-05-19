<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table = 'tbl_users';

    protected $guarded = [
        'id'
    ];

    public function group()
    {
        return $this->belongsTo(Group::class);
    }

    public function grade()
    {
        return $this->belongsTo(Grade::class);
    }
}
