<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    //
    public function auth()
    {
        return $this->belongsTo(Auth::class, 'auth_id');
    }

    public function book()
    {
        return $this->belongsTo(Book::class, 'book_id');
    }

    //$auth = Auth::find(1); // Tìm tài khoản với ID = 1
    //$reviews = $auth->reviews; // Lấy tất cả các review của tài khoản này
    // $review = Review::find(1); // Tìm review với ID = 1
    // $auth = $review->auth; // Lấy tài khoản liên kết với review này
}
