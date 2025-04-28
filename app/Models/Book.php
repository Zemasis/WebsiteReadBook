<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    // Các cột có thể được gán giá trị
    protected $fillable = [
        'name',
        'author',
        'chapter',
        'description',
        'review',
        'tags',
        'image',
    ];

    // Nếu bạn lưu tags dưới dạng JSON
    protected $casts = [
        'tags' => 'array',
    ];

    public function reviews()
    {
        return $this->hasMany(Review::class, 'book_id');
    }

    public function author()
    {
        return $this->belongsTo(Author::class, 'author_id');
    }
}
