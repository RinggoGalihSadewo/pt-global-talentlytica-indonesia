<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    protected $table = 'tbl_grades';

    protected $guarded = [
        'id'
    ];

    public function user()
    {
        return $this->hasOne(User::class);
    }
}
