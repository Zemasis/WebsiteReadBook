<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class HomepageController extends Controller
{
    /**
     * Show the homepage.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Lấy danh sách sách từ cơ sở dữ liệu
        $books = Book::all();

        // Trả về view với danh sách sách
        return view('homepage.index', compact('books'));
    }
}
