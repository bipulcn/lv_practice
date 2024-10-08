<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Model;

class author extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'about', 'dob'];

    public function articles(): BelongsToMany 
    {
        return $this->belongsToMany(Article::class, table: 'writers');
    }
}
