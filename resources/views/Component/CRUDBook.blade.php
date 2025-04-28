
<div class="p-6 bg-white rounded-lg shadow-md">
    <div class="flex items-center justify-between mb-4">
      <h2 class="text-lg font-bold">All Book:
        <span class="text-indigo-600">{{$books->count()}}</span>
        {{-- Projects: <span class="text-indigo-600">884</span> --}}
      </h2>
        <a href="{{ url('/Admin/ListBook?stateCRUD=create') }}" class="text-white">
            <button class="bg-[#f1912b] hover:bg-[#e14b32] text-white px-4 py-2 rounded-md text-sm font-semibold">
                + Add new Book
            </button>
        </a>
    </div>

    <table class="w-full text-sm text-left text-gray-700">
      <thead class="bg-gray-100">
        <tr>
          <th class="p-3"><input type="checkbox" /></th>
          <th class="p-3">ID</th>
          <th class="p-3">Cover</th>
          <th class="p-3">Book Name</th>
          <th class="p-3">Auhtor</th>
          <th class="p-3">Chapter</th>
          <th class="p-3">Description</th>
          <th class="p-3">Rating</th>
          <th class="p-3">Last update</th>
          <th class="p-3 text-center">Status</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($books as $book)
        <tr class="border-b hover:bg-gray-50 align-middle">
            <td class="p-3"><input type="checkbox" /></td>
            <td class="p-3">
                <span>{{ $book->id }}</span>
            </td>
            <td class="p-3">
                <img src="{{ asset('storage/' . $book->image) }}" class="w-8 h-12" />
            </td>
            <td class="p-3">{{ $book->name }}</td>
            <td class="p-3">{{ $book->author }}</td>
            <td class="p-3">{{ $book->chapter }}</td>
            <td class="p-3">{{ $book->description }}</td>
            <td class="p-3">{{ $book->review }}</td>
            <td class="p-3 text-gray-500">{{ $book->created_at->format('d M Y') }}</td>
            <td class="p-3 gap-2 table-cell">
                <div class="flex gap-2">
                    <a href="{{ route('BookList.edit', ['id' => $book->id]) }}?stateCRUD=update ">
                        <button class=" bg-[#f1912b] hover:bg-[#e14b32] text-white px-4 py-2 rounded-md text-sm font-semibold">
                            Update
                        </button>
                    </a>
                    <button class=" bg-[#f1912b] hover:bg-[#e14b32] text-white px-4 py-2 rounded-md text-sm font-semibold">Delete</button>
                </div>
            </td>
        </tr>
        @endforeach
      </tbody>
    </table>

    <!-- Pagination -->
    <div class="flex justify-between items-center mt-4">
      <div class="text-sm text-gray-500">Showing 1-10 of 100</div>
      <div class="space-x-1">
        <button class="px-2 py-1 bg-gray-200 rounded hover:bg-gray-300">&laquo;</button>
        <button class="px-2 py-1 bg-blue-600 text-white rounded">1</button>
        <button class="px-2 py-1 bg-gray-200 rounded hover:bg-gray-300">2</button>
        <button class="px-2 py-1 bg-gray-200 rounded hover:bg-gray-300">3</button>
        <button class="px-2 py-1 bg-gray-200 rounded hover:bg-gray-300">&raquo;</button>
      </div>
    </div>
  </div>

