<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hobby extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->belongsToMany(User::class, 'hobby_user',  'user_id', 'hobby_id');
    }
}
