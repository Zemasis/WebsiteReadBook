<div class="p-6 bg-white rounded-lg shadow-md">
    <div class="flex items-center justify-between mb-4">
      <h2 class="text-lg font-bold">All Users: <span class="text-indigo-600">1,356,546</span> Projects: <span class="text-indigo-600">884</span></h2>
      <button class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md text-sm font-semibold">+ Add new user</button>
    </div>

    <table class="w-full text-sm text-left text-gray-700">
      <thead class="bg-gray-100">
        <tr>
          <th class="p-3"><input type="checkbox" /></th>
          <th class="p-3">User</th>
          <th class="p-3">User Role</th>
          <th class="p-3">Status</th>
          <th class="p-3">Social</th>
          <th class="p-3">Promote</th>
          <th class="p-3">Rating</th>
          <th class="p-3">Last Login</th>
          <th class="p-3 text-right">...</th>
        </tr>
      </thead>
      <tbody>
        <!-- Lặp qua danh sách user -->
        {{-- @foreach ($users as $user)
        <tr class="border-b hover:bg-gray-50">
          <td class="p-3"><input type="checkbox" /></td>
          <td class="p-3 flex items-center gap-3">
            <img src="{{ $user->avatar }}" class="w-8 h-8 rounded-full" />
            <span>{{ $user->name }}</span>
          </td>
          <td class="p-3">
            <span class="px-2 py-1 text-xs font-semibold rounded
              @if($user->role === 'Administrator') bg-blue-100 text-blue-700
              @elseif($user->role === 'Moderator') bg-purple-100 text-purple-700
              @else bg-gray-200 text-gray-600 @endif">
              {{ $user->role }}
            </span>
          </td>
          <td class="p-3">
            <span class="flex items-center gap-1">
              <span class="w-2 h-2 rounded-full
                {{ $user->status === 'Active' ? 'bg-green-500' : 'bg-red-500' }}"></span>
              {{ $user->status }}
            </span>
          </td>
          <td class="p-3 space-x-2 text-lg">
            <i class="fab fa-facebook"></i>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-github"></i>
          </td>
          <td class="p-3">
            <label class="inline-flex items-center cursor-pointer">
              <input type="checkbox" class="sr-only" {{ $user->promote ? 'checked' : '' }}>
              <div class="w-10 h-5 bg-gray-300 rounded-full relative">
                <div class="dot absolute left-0 top-0 bg-white w-5 h-5 rounded-full shadow transition
                  {{ $user->promote ? 'translate-x-full bg-blue-500' : '' }}"></div>
              </div>
            </label>
          </td>
          <td class="p-3">
            <span class="{{ $user->rating_change === 'up' ? 'text-green-600' : 'text-red-600' }}">
              {{ $user->rating_change === 'up' ? '↑' : '↓' }} {{ $user->rating }}
            </span>
          </td>
          <td class="p-3 text-gray-500">{{ $user->last_login->format('d M Y') }}</td>
          <td class="p-3 text-right">
            <button class="text-gray-400 hover:text-black">•••</button>
          </td>
        </tr>
        @endforeach --}}
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

