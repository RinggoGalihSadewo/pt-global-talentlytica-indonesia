<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $table = 'tbl_groups';

    protected $guarded = [
        'id'
    ];

    public function user()
    {
        return $this->hasMany(User::class);
    }
}
