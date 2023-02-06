<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;
    protected $guarded=[];


    /**
     * Get the user that owns the Subcategory
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id'); //id=category id // for backend
    }

        /**
         * Get all of the comments for the Subcategory
         *
         * @return \Illuminate\Database\Eloquent\Relations\HasMany
         */
        // public function produts()
        // {
        //     return $this->hasMany(product::class, 'subcategory_id', 'id');
        // }
}
