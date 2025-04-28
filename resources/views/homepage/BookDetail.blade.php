@extends('layouts.app')
@section('title', 'ReadVerse - Detail')

@section('contentDetail')


<div class="max-w-7xl mx-auto p-6 bg-white rounded-lg shadow-md flex flex-col md:flex-row gap-8">
    <!-- Cover Book picture -->
    <div class="md:w-1/3 flex flex-col items-center">
      <img src="{{ asset('storage/' . $book->image) }}" alt="Book Thumbnail" class="w-48 h-auto object-contain rounded-lg mb-4">
      <div class="flex gap-2">
        <button class="px-4 py-2 bg-[#f1912b] text-white rounded-md font-semibold hover:bg-[#e47a18]">Read sample</button>
        <button class="px-4 py-2 bg-[#253864] text-white rounded-md font-semibold hover:bg-[#1b2c50]">Audible sample</button>
      </div>
    </div>

    <!-- Nội dung chi tiết -->
    <div class="md:w-2/3">
      <!-- Tiêu đề sách -->
      <h1 class="text-2xl font-bold text-gray-800 mb-2">
        {{ $book->name }}
      </h1>

      <!-- Tác giả -->
      <p class="text-sm text-gray-600 mb-4">
        by <span class="text-blue-600 font-semibold">{{ $book->author}}</span> (Author)
      </p>

      <!-- Rating -->
      <div class="flex items-center mb-6">
        <span class="text-black-500 mr-4" >{{$book->review}} </span>
        <span class="text-yellow-400 text-lg mr-1">★</span>
        <span class="text-yellow-400 text-lg mr-1">★</span>
        <span class="text-yellow-400 text-lg mr-1">★</span>
        <span class="text-yellow-400 text-lg mr-1">★</span>
        <span class="text-gray-300 text-lg mr-2">★</span>
        <span class="text-sm text-gray-600">(432 ratings)</span>
      </div>

      <!-- Mô tả ngắn -->
      <p class="text-gray-700 mb-4 leading-relaxed">
        {{ $book->description }}
      </p>


      <div class="grid grid-cols-2 gap-4 mt-8 text-sm text-gray-700">
        <div class="flex items-center">
          <i class="fas fa-file-alt mr-2 text-gray-500"></i>
          <span>{{$book->chapter}} pages</span>
        </div>
        <div class="flex items-center">
          <i class="fas fa-language mr-2 text-gray-500"></i>
          <span>English</span>
        </div>
        <div class="flex items-center">
          <i class="fas fa-calendar-alt mr-2 text-gray-500"></i>
          <span>September 7, 2019</span>
        </div>
        <div class="flex items-center">
          <i class="fas fa-ruler-combined mr-2 text-gray-500"></i>
          <span>6 x 0.53 x 9 inches</span>
        </div>
        <div class="flex items-center">
          <i class="fas fa-barcode mr-2 text-gray-500"></i>
          <span>ISBN-10: 1691706639</span>
        </div>
      </div>
    </div>
  </div>
@endsection
