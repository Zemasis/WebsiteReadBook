<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Auth; // Đảm bảo bạn đã import model Auth

class AuthController extends Controller
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
        try {
        // Validate dữ liệu
        $validated = $request->validate([
            'email' => 'required|email|unique:auths,email',
            'password' => 'required|min:6|confirmed', // 'confirmed' kiểm tra password_confirmation
        ]);

        // Lưu vào cơ sở dữ liệu
        Auth::create([
            'email' => $validated['email'],
            'password' => bcrypt($validated['password']), // Mã hóa mật khẩu
        ]);

            // Lưu trạng thái thành công vào session
        session()->flash('register_success', true);

        return redirect()->route('homepage.index')->with('success', 'Registration successful!');
        } catch (\Exception $e) {
            // Xử lý lỗi nếu việc lưu thất bại
            return redirect()->route('register')->withErrors(['error' => 'Registration failed. Please try again.']);
        }
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
