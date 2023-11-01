<div class="fixed left-0 top-0 w-64 h-full bg-gray-900 p-4">
        <a href="#" class="flex items-center pb-4 border-b border-b-gray-800">
            <img src="https://placehold.co/32x32" alt="" class="w-8 h-8 rounded object-cover">
            <span class="text-lg font-bold text-white ml-3">GRUP D</span>
        </a>
        <ul class="mt-4">
            <li class="mb-1 group active">
                <a href="#" class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white">
                    <!-- from remixicon-->
                    <i class="ri-home-2-line mr-3 text-lg"></i>
                    <span class="text-sm">Dasboard</span>
                </a>
            </li>
            <li class="mb-1 group">
                <a href="#" class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white">
                    <!-- from remixicon-->
                    <i class="ri-file-edit-line mr-3 text-lg"></i>
                    <span class="text-sm">Crud Data</span>
                    <i class="ri-arrow-right-s-line ml-auto group-[.active]:rotate-90"></i>
                </a>
                <ul class="pl-7 mt-2">
                    <li class="mb-4">
                        <a href="{{route('mahasiswa.index')}}"class="text-gray-300 text-sm flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">Mahasiswa</a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="text-gray-300 text-sm flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">Dosen</a>
                    </li>
                </ul>
            </li>
            <li class="mb-1 group">
                <a href="#" class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white">
                    <!-- from remixicon-->
                    <i class="ri-settings-2-line mr-3 text-lg"></i>
                    <span class="text-sm">Setting</span>
                </a>
            </li>
        </ul>
</div>
