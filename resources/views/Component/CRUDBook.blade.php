<div class="max-w-7xl w-full mx-auto bg-white shadow-xl rounded-xl overflow-hidden flex">
    <!-- Bên trái: Thumbnail -->
    <div class="w-1/2 p-3 flex flex-col h-full">
        <div class=" p-4 pb-2 flex-grow">
            <h2 class="text-lg font-semibold text-gray-700 mg-2 mb-4">Create Thumbnail</h2>

        <!-- Ảnh nằm gọn trong div -->
            <div class="p-2 border border-dashed border-gray-300 rounded-md bg-white h-full  flex items-center justify-center">
                <img src="{{ asset('images/Book1.jpg') }}" alt="Preview" class="max-h-full object-contain" />
            </div>
        </div>
        <button class="w-1/4 m-4 px-4 py-2 bg-[#f1912b] text-white font-semibold rounded-md hover:bg-[#e47a18]">Choose picture</button>
    </div>


    <!-- Form bên phải -->
    <div class="w-1/2 p-6">
      <div class="flex justify-between items-center mb-4">
        <h2 class="text-lg font-semibold text-gray-700">Create a new project</h2>
        <button class="text-gray-400 hover:text-black text-4xl">&times;</button>
      </div>

      <!-- Project Name -->
      <div class="mb-4">
        <label class="block text-sm font-medium text-gray-700 mb-1">Book name</label>
        <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#f1912b]">
      </div>

      <!-- Author -->
      <div class="mb-4">
        <label class="block text-sm font-medium text-gray-700 mb-1">Author</label>
        <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#f1912b]">
      </div>

      <!-- Chapter -->
      <div class="mb-4">
        <label class="block text-sm font-medium text-gray-700 mb-1">Chapter</label>
        <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#f1912b]">
      </div>

       <!-- Description -->
       <div class="mb-4">
        <label class="block text-sm font-medium text-gray-700 mb-1">Description</label>
        <input type="text-area" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#f1912b]">
      </div>

      <!-- review -->
      <div class="mb-4">
        <label class="block text-sm font-medium text-gray-700 mb-1">Review</label>
        <input type="text-area" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#f1912b]">
      </div>


      <!-- Tags -->
      <div class="mb-4">
        <label class="block text-sm font-medium text-gray-700 mb-1">Tags</label>
        <div class="flex flex-wrap gap-2 border border-gray-300 rounded-md p-2 min-h-[48px]">
          <span class="bg-gray-100 text-sm px-2 py-1 rounded-full">Web Design</span>
          <span class="bg-gray-100 text-sm px-2 py-1 rounded-full">About Us</span>
          <input type="text" placeholder="Type to search..." class="flex-1 min-w-[120px] outline-none text-sm text-gray-700" />
        </div>
        <p class="text-xs text-gray-400 mt-1">14 tags remaining</p>
      </div>

      <!-- Buttons -->
      <div class="flex justify-between items-center mt-6">
        <button class="px-4 py-2 border border-gray-300 rounded-md text-gray-700 hover:bg-gray-100">Close</button>
        <button class="px-4 py-2 bg-[#f1912b] text-white font-semibold rounded-md hover:bg-[#e47a18]">Save now</button>
      </div>
    </div>
  </div>
