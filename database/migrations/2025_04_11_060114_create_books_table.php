<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('books', function (Blueprint $table) {
        $table->id();
        $table->string('name'); // Tên sách
        $table->string('author'); // Tác giả
        $table->integer('chapter')->nullable(); // Số chương
        $table->text('description')->nullable(); // Mô tả
        $table->text('review')->nullable(); // Đánh giá
        $table->json('tags')->nullable(); // Tags (dạng JSON)
        $table->string('image')->nullable(); // Hình ảnh
        $table->timestamps(); // Thời gian tạo và cập nhật
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
