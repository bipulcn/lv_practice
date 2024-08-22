<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'details', 'par_id'];

    public function categories()
    {
        return $this->hasOne(Category::class, 'par_id', 'id');
    }

    /**
     * Get the Parents that owns the Category
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Parents(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'id', 'par_id');
    }
}
