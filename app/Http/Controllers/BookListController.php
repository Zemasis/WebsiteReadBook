<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookListController extends Controller
{
    /**
     * Show the homepage.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        // Lấy danh sách sách từ cơ sở dữ liệu
        $books = Book::all();
        $section = 'ListBook'; // Đặt giá trị cho $section
        $stateCRUD = $request->query('stateCRUD', 'default'); // Lấy giá trị stateCRUD từ query string, mặc định là 'default'
        // Trả về view với danh sách sách
        return view('Admin', compact('books', 'section', 'stateCRUD'));
    }

    public function edit(Request $request, $id)
    {
        // Tìm sách theo ID
        $book = Book::findOrFail($id);
        $section = 'ListBook'; // Đặt giá trị cho $section
        $stateCRUD = $request->query('stateCRUD', 'default'); // Lấy giá trị stateCRUD từ query string, mặc định là 'default'
        return view('Admin', compact('book','section','stateCRUD'));
    }
}
