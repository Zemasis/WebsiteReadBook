

    <header class="header">
        
            <div class="flex items-center justify-between">
                <img src="{{ asset('images/CircleCapypara.png') }}" alt="Capybara Icon" class="Logo">
                <img src="{{ asset('images/ReadVerse.png') }}" alt="ReadVerse Logo" class="Logo2">
            </div>
        </a>

        <div class="mx-4 state fa-solid fa-lightbulb flex justify-center items-center border-b-4 border-[#B55E18] hover:border-[#A82E1B] active:translate-y-1  active:border-b-2 transform transition cursor-pointer"></div>
        <input type="text" class="px-4 py-3 mx-4 w-1/2 border border-gray-600 rounded-xl " placeholder="Search...">
        <i class="fa-solid fa-magnifying-glass px-4 py-1 border border-[#B55E18] text-2xl rounded-xl bg-[#f1912b] hover:bg-[#e14b32] text-white font-bold border-b-4 border-[#B55E18] hover:border-[#A82E1B] shadow-md focus:outline-none active:translate-y-1  active:border-b-2 transform transition cursor-pointer"></i>
        <div class="ml-auto" x-data="{ showModal: false ,showModal2: false }">
            <button class="mx-4 bg-[#f1912b] hover:bg-[#e14b32] text-white font-bold py-2 px-4 border-b-4 border-[#B55E18] hover:border-[#A82E1B] rounded shadow-md focus:outline-none active:translate-y-1 active:border-b-2 transform transition" @click="showModal = true">
                Login
            </button>
            <button class="mx-4 bg-[#f1912b] hover:bg-[#e14b32] text-white font-bold py-2 px-4 border-b-4 border-[#B55E18] hover:border-[#A82E1B] rounded shadow-md focus:outline-none active:translate-y-1 active:border-b-2 transform transition" @click="showModal2 = true">
                Register
            </button>


                <div x-show="showModal"  class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center z-50">
                    <div @click.outside="showModal = false" class="bg-white w-full max-w-md p-6 rounded-lg shadow-lg relative">
                        <button class="absolute top-2 right-4 text-gray-600 text-5xl" @click="showModal = false">&times;</button>

                        <h2 class=" text-xl font-extrabold mb-4 ">Login</h2>

                        <form action="" method="POST">
                            @csrf
                            <label for="email" class="font-medium block mb-1">Email</label>
                            <input type="email" id="email" name="email" placeholder="Your email"
                                class="w-full mb-4 px-4 py-2 border border-gray-400 rounded" required>

                            <label for="password" class="font-medium block mb-1">Password</label>
                            <input type="password" id="password" name="password" placeholder="Your password"
                                class="w-full mb-4 px-4 py-2 border border-gray-400 rounded" required>

                            <button type="submit"
                                class="w-full bg-[#f1912b] text-white font-semibold py-2 px-4 rounded-md mb-4 hover:opacity-90 border-b-4 border-[#B55E18] hover:border-[#A82E1B] rounded shadow-md focus:outline-none active:translate-y-1 active:border-b-2 transform transition">
                                Login
                            </button>

                            <div class="relative text-center text-gray-500 mb-4">
                                <span class="before:absolute before:left-0 before:w-[40%] before:border-t before:top-1/2 before:translate-y-1/2
                                            after:absolute after:right-0 after:w-[40%] after:border-t after:top-1/2 after:translate-y-1/2">
                                    Or
                                </span>
                            </div>

                            <div class="flex justify-between gap-2 mb-4">
                                <a href="#" class="w-1/2 bg-[#253864] text-white py-2 px-4 rounded-md flex items-center justify-center text-sm font-semibold">
                                    <i class="fab fa-facebook mr-2 mt-0.5"></i> Facebook
                                </a>
                                <a href="#" class="w-1/2 bg-[#DB4437] text-white py-2 px-4 rounded-md flex items-center justify-center text-sm font-semibold">
                                    <i class="fab fa-google mr-2 mt-0.5"></i> Google
                                </a>
                            </div>

                            <div class="flex justify-center text-sm text-gray-500">
                                <span>Don't have account?</span>
                                <a href="#" class="ml-1 text-[#0d6efd] font-medium hover:underline" @click="showModal = false; showModal2 = true">Create here</a>
                            </div>
                        </form>
                    </div>
                </div>


            <!-- resources/views/components/register-modal.blade.php -->
            <div>
                <div x-show="showModal2"  class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center z-50" >
                    <div @click.outside="showModal2 = false" class="bg-white w-full max-w-md p-6 rounded-lg shadow-lg relative">
                        <button class="absolute top-2 right-4 text-gray-600 text-5xl" @click="showModal2 = false">&times;</button>

                        <h2 class="text-xl font-semibold mb-4">Register</h2>
                        <!-- Hiển thị thông báo lỗi nếu có -->
                        @if ($errors->any())
                            <div class="bg-red-500 text-white p-4 rounded mb-4">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{ route('register') }}" method="POST">
                            @csrf <!-- Bảo vệ chống tấn công CSRF -->

                            <label for="email" class="font-medium block mb-1">Email</label>
                            <input type="email" id="email" name="email" placeholder="Your email"
                                class="w-full mb-4 px-4 py-2 border border-gray-400 rounded" required>

                            <label for="password" class="font-medium block mb-1">Password</label>
                            <input type="password" id="password" name="password" placeholder="Your password"
                                class="w-full mb-4 px-4 py-2 border border-gray-400 rounded" required>

                            <label for="password_confirmation" class="font-medium block mb-1">Re-enter password</label>
                            <input type="password" id="password_confirmation" name="password_confirmation"
                                placeholder="Re-enter your password"
                                class="w-full mb-4 px-4 py-2 border border-gray-400 rounded" required>

                            <button type="submit"
                                class="w-full bg-[#f1912b] text-white font-semibold py-2 px-4 rounded-md mb-4 hover:opacity-90 border-b-4 border-[#B55E18] hover:border-[#A82E1B] rounded shadow-md focus:outline-none active:translate-y-1 active:border-b-2 transform transition">
                                Sign Up
                            </button>

                            {{-- <div id="registerErrors" class="bg-red-500 text-white p-4 rounded mb-4 hidden"></div> --}}

                            <div class="relative text-center text-gray-500 mb-4">
                                <span class="before:absolute before:left-0 before:w-[40%] before:border-t before:top-1/2 before:translate-y-1/2
                                            after:absolute after:right-0 after:w-[40%] after:border-t after:top-1/2 after:translate-y-1/2">
                                    Or
                                </span>
                            </div>

                            <div class="flex justify-between gap-2 mb-4">
                                <a href="#" class="w-1/2 bg-[#253864] text-white py-2 px-4 rounded-md flex items-center justify-center text-sm font-semibold">
                                    <span class="flex items-center ">
                                        <i class="fab fa-facebook mr-2 mt-0.5"></i> Facebook
                                    </span>
                                </a>
                                <a href="#" class="w-1/2 bg-[#DB4437] text-white py-2 px-4 rounded-md flex items-center justify-center text-sm font-semibold">
                                    <span class="flex items-center">
                                        <i class="fab fa-google mr-2 mt-0.5 "></i> Google
                                    </span>
                                </a>
                            </div>

                            <div class="flex justify-center text-sm text-gray-500">
                                <span>Already have an account?</span>
                                <a href="#" class="ml-1 text-[#0d6efd] font-medium hover:underline" @click="showModal2 = false; showModal = true" >Login</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>
<!-- Thông báo thành công -->
@if (session('success'))
<div class="bg-green-500 text-white p-4 rounded mb-4">
    {{ session('success') }}
</div>
@endif
<script>
    document.getElementById('registerForm').addEventListener('submit', function (e) {
        e.preventDefault(); // Ngăn form gửi dữ liệu theo cách thông thường

        // Lấy dữ liệu từ form
        const formData = new FormData(this);

        // Gửi dữ liệu qua AJAX
        fetch(this.action, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
                'Accept': 'application/json',
            },
            body: formData,
        })
        .then(response => {
            if (!response.ok) {
                return response.json().then(errors => {
                    throw errors; // Ném lỗi để xử lý trong catch
                });
            }
            return response.json();
        })
        .then(data => {
            // Xử lý khi đăng ký thành công
            document.getElementById('registerErrors').classList.add('hidden'); // Ẩn thông báo lỗi
            alert('Registration successful!'); // Hiển thị thông báo thành công
            location.reload(); // Hoặc chuyển hướng nếu cần
        })
        .catch(errors => {
            // Hiển thị lỗi
            const errorDiv = document.getElementById('registerErrors');
            errorDiv.innerHTML = ''; // Xóa thông báo lỗi cũ
            errorDiv.classList.remove('hidden'); // Hiển thị thông báo lỗi
            for (const key in errors.errors) {
                errors.errors[key].forEach(error => {
                    const errorItem = document.createElement('p');
                    errorItem.textContent = error;
                    errorDiv.appendChild(errorItem);
                });
            }
        });
    });
</script>
