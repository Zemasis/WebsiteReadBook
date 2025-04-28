
@extends('layouts.app')
@section('title', 'ReadVerse - Homepage')

@section('content')
    <section class="max-w-7xl mx-auto mt-10">
        <h2 class="text-[#f1912b] text-xl font-semibold flex items-center gap-2 mb-4">
          <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M9.049 2.927a.75.75 0 011.902 0l1.286 3.957h4.15a.75.75 0 01.44 1.36l-3.36 2.44 1.286 3.957a.75.75 0 01-1.154.84L10 13.288l-3.36 2.44a.75.75 0 01-1.154-.84l1.286-3.957-3.36-2.44a.75.75 0 01.44-1.36h4.15L9.049 2.927z" clip-rule="evenodd" />
          </svg>
          New Books Update
        </h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6">
          <!-- Mỗi card truyện -->
            @foreach ($books as $book)

                <div>
                <!-- ẢNH: có viền, bóng, bo góc riêng -->
                    <div class="bg-white rounded-lg shadow hover:shadow-lg transition overflow-hidden">
                        <div class="relative w-full h-[220px] bg-gray-100">
                            <img src="{{ asset('storage/' . $book->image) }}" alt="Thumbnail" class="w-full h-full object-contain" />
                            <span class="absolute top-2 left-2 bg-cyan-500 text-white text-xs font-semibold px-2 py-0.5 rounded">
                                {{ $book->created_at->diffForHumans() }}
                            </span>
                            @if ($book->is_hot)
                                <span class="absolute top-2 right-2 bg-pink-500 text-white text-xs font-semibold px-2 py-0.5 rounded">
                                    Hot
                                </span>
                            @endif
                        </div>
                    </div>

                    <!-- TIÊU ĐỀ + CHƯƠNG: Nằm hẳn bên dưới ảnh -->
                    <div class="p-2 text-center">
                        <h3 class="text-sm font-semibold line-clamp-2">{{ $book->name }}</h3>
                        <p class="text-xs text-gray-600 mt-1">Chapter {{ $book->chapter }}</p>
                    </div>
                </div>
            @endforeach
          <!-- Copy đoạn div trên thêm 5 lần nữa cho đủ 6 card -->
          {{-- <!-- Bạn có thể dùng vòng lặp trong Blade để render list -->

            <div>
            <!-- ẢNH: có viền, bóng, bo góc riêng -->
                <div class="bg-white rounded-lg shadow hover:shadow-lg transition overflow-hidden">
                    <div class="relative w-full h-[220px] bg-gray-100">
                        <img src="{{ asset('images/Book4.jpg') }}" alt="Thumbnail" class="w-full h-full object-contain" />
                        <span class="absolute top-2 left-2 bg-cyan-500 text-white text-xs font-semibold px-2 py-0.5 rounded">
                        4 Minutes Ago
                        </span>
                        <span class="absolute top-2 right-2 bg-pink-500 text-white text-xs font-semibold px-2 py-0.5 rounded">
                        Hot
                        </span>
                    </div>
                </div>

                <!-- TIÊU ĐỀ + CHƯƠNG: Nằm hẳn bên dưới ảnh -->
                <div class="p-2 text-center">
                    <h3 class="text-sm font-semibold line-clamp-2">Tên Truyện Siêu Dài Cũng Được Hiển Thị</h3>
                    <p class="text-xs text-gray-600 mt-1">Chương 123</p>
                </div>
            </div>
            <div>
                <!-- ẢNH: có viền, bóng, bo góc riêng -->
                <div class="bg-white rounded-lg shadow hover:shadow-lg transition overflow-hidden">
                    <div class="relative w-full h-[220px] bg-gray-100">
                        <img src="{{ asset('images/Book5.jpg') }}" alt="Thumbnail" class="w-full h-full object-contain" />
                            <span class="absolute top-2 left-2 bg-cyan-500 text-white text-xs font-semibold px-2 py-0.5 rounded">
                            4 Minutes Ago
                            </span>
                            <span class="absolute top-2 right-2 bg-pink-500 text-white text-xs font-semibold px-2 py-0.5 rounded">
                            Hot
                            </span>
                        </div>
                    </div>

                    <!-- TIÊU ĐỀ + CHƯƠNG: Nằm hẳn bên dưới ảnh -->
                    <div class="p-2 text-center">
                        <h3 class="text-sm font-semibold line-clamp-2">Tên Truyện Siêu Dài Cũng Được Hiển Thị</h3>
                        <p class="text-xs text-gray-600 mt-1">Chương 123</p>
                </div>
            </div>
            <div>
                <!-- ẢNH: có viền, bóng, bo góc riêng -->
                <div class="bg-white rounded-lg shadow hover:shadow-lg transition overflow-hidden">
                    <div class="relative w-full h-[220px] bg-gray-100">
                        <img src="{{ asset('images/Book7.jpg') }}" alt="Thumbnail" class="w-full h-full object-contain" />
                            <span class="absolute top-2 left-2 bg-cyan-500 text-white text-xs font-semibold px-2 py-0.5 rounded">
                            4 Minutes Ago
                            </span>
                            <span class="absolute top-2 right-2 bg-pink-500 text-white text-xs font-semibold px-2 py-0.5 rounded">
                            Hot
                            </span>
                        </div>
                    </div>

                    <!-- TIÊU ĐỀ + CHƯƠNG: Nằm hẳn bên dưới ảnh -->
                    <div class="p-2 text-center">
                        <h3 class="text-sm font-semibold line-clamp-2">Tên Truyện Siêu Dài Cũng Được Hiển Thị</h3>
                        <p class="text-xs text-gray-600 mt-1">Chương 123</p>
                </div>
            </div>
            <div>
                <!-- ẢNH: có viền, bóng, bo góc riêng -->
                <div class="bg-white rounded-lg shadow hover:shadow-lg transition overflow-hidden">
                    <div class="relative w-full h-[220px] bg-gray-100">
                        <img src="{{ asset('images/Book8.jpg') }}" alt="Thumbnail" class="w-full h-full object-contain" />
                            <span class="absolute top-2 left-2 bg-cyan-500 text-white text-xs font-semibold px-2 py-0.5 rounded">
                            4 Minutes Ago
                            </span>
                            <span class="absolute top-2 right-2 bg-pink-500 text-white text-xs font-semibold px-2 py-0.5 rounded">
                            Hot
                            </span>
                        </div>
                    </div>

                    <!-- TIÊU ĐỀ + CHƯƠNG: Nằm hẳn bên dưới ảnh -->
                    <div class="p-2 text-center">
                        <h3 class="text-sm font-semibold line-clamp-2">Tên Truyện Siêu Dài Cũng Được Hiển Thị</h3>
                        <p class="text-xs text-gray-600 mt-1">Chương 123</p>
                </div>
            </div>
            <div>
                <!-- ẢNH: có viền, bóng, bo góc riêng -->
                <div class="bg-white rounded-lg shadow hover:shadow-lg transition overflow-hidden">
                    <div class="relative w-full h-[220px] bg-gray-100">
                        <img src="{{ asset('images/Book1.jpg') }}" alt="Thumbnail" class="w-full h-full object-contain" />
                            <span class="absolute top-2 left-2 bg-cyan-500 text-white text-xs font-semibold px-2 py-0.5 rounded">
                            4 Minutes Ago
                            </span>
                            <span class="absolute top-2 right-2 bg-pink-500 text-white text-xs font-semibold px-2 py-0.5 rounded">
                            Hot
                            </span>
                        </div>
                    </div>

                    <!-- TIÊU ĐỀ + CHƯƠNG: Nằm hẳn bên dưới ảnh -->
                    <div class="p-2 text-center">
                        <h3 class="text-sm font-semibold line-clamp-2">Tên Truyện Siêu Dài Cũng Được Hiển Thị</h3>
                        <p class="text-xs text-gray-600 mt-1">Chương 123</p>
                </div>
            </div>
          <!-- ... Thêm 4 card nữa tương tự -->
        </div> --}}
      </section>
@endsection

