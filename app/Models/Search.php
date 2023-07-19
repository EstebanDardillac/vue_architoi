<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Search extends Model
{
    use HasFactory;

    public static function search($request)
{
    $categories = Search::query();

    if (isset($request['search'])) {
        $categories = $categories->where('name', 'like', '%'.$request['search'].'%');
    }

    return $categories->paginate(1);
}
}
