<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    public function book()
    {
        return $this->belongsTo(Book::class);
    }
    public static function booted(){
        static::updated(fn(Review $review) => catche()->forget('book:' . $review->book_id));
        static::deleted(fn(Review $review) => catche()->forget('book:' . $review->book_id));
    }
}
