<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{

    protected $fillable = [
        'name', 'age'
    ];

    public function books() {
        return $this->hasMany(Book::class);
    }
}
