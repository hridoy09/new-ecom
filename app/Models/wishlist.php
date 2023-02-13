<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class wishlist extends Model
{
    use HasFactory;

    /**
     * Get the user that owns the wishlist
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function wishProduct()
    {
        return $this->belongsTo(product::class, 'product_id', 'id');
    }
}
