<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $guarded=[];

    /**
     * Get the user that owns the Category
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function subcategories()
    {
        return $this->hasMany(Subcategory::class, 'category_id', 'id'); //id=category id; category_id=sub category id frontend
    }
    /**
     * Get all of the comments for the Category
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */

}




