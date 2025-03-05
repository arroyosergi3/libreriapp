<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Deal extends Model
{
    /** @use HasFactory<\Database\Factories\DealFactory> */
    use HasFactory;
    protected $fillable = ['user1_id', 'book1_id', 'user2_id', 'book2_id', 'status'];

    public function user1(): BelongsTo {
        return $this->belongsTo(User::class, 'user1_id');
    }

    public function user2(): BelongsTo {
        return $this->belongsTo(User::class, 'user2_id');
    }

    public function book1(): BelongsTo {
        return $this->belongsTo(Book::class, 'book1_id');
    }

    public function book2(): BelongsTo {
        return $this->belongsTo(Book::class, 'book2_id');
    }
}
