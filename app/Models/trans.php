<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class trans extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category_id',
        'date',
        'amount',
        'note',
        'image',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(category::class);
    }
}
