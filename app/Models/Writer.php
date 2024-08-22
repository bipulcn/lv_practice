<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class writer extends Model
{
    use HasFactory;
    public function articles() {
        return $this->hasMany(Article::class);
    }
    public function authors() {
        return $this->hasMany(Author::class);
    }
}
