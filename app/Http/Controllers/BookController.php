<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //// Validate dữ liệu từ form
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'chapter' => 'nullable|integer',
            'description' => 'nullable|string',
            'review' => 'nullable|string',
            'tags' => 'nullable|array',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Kiểm tra định dạng hình ảnh
        ]);

        if ($request->hasFile('image')) {
            // Kiểm tra và lưu hình ảnh
            $imagePath = $request->file('image')->store('images', 'public');
            $validated['image'] = $imagePath;
        }
        // Nếu không có hình ảnh, gán giá trị null
        $validated['image'] = $request->file('image') ? $request->file('image')->store('images','public') : null;

        // Lưu dữ liệu vào cơ sở dữ liệu
        Book::create([
            'name' => $validated['name'],
            'author' => $validated['author'],
            'chapter' => $validated['chapter'] ?? null,
            'description' => $validated['description'] ?? null,
            'review' => $validated['review'] ?? null,
            'tags' => $validated['tags'] ?? null,
            'image' => $request->file('image') ? $request->file('image')->store('images') : null, // Lưu hình ảnh
        ]);

        // Chuyển hướng sau khi lưu thành công
        return redirect()->back()->with('success', 'Book created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $book = Book::findOrFail($id);

    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'author' => 'required|string|max:255',
        'chapter' => 'nullable|integer',
        'description' => 'nullable|string',
        'review' => 'nullable|string',
        'tag' => 'nullable|string',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    if ($request->hasFile('image')) {
        $validated['image'] = $request->file('image')->store('images', 'public');
    }

    $book->update($validated);

        return redirect()->route('BookList.index')->with('success', 'Book updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
