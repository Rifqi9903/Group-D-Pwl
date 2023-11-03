<div class="fixed left-0 top-0 w-60 h-full bg-gray-900 p-4">
        <a href="#" class="flex items-center pb-4 border-b border-b-gray-800">
            <img src="https://placehold.co/32x32" alt="" class="w-8 h-8 rounded object-cover">
            <span class="text-lg font-bold text-white ml-3">GRUP D</span>
        </a>
        <ul class="mt-4">
            <li class="mb-1 group active">
                <a href="{{route('home')}}" class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white">
                    <!-- from remixicon-->
                    <x-sidebar-menu icon="ri-home-2-line" title="Dashboard" />
                 </a>
            </li>

            <li class="mb-1 group">
                <a href="#" class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white">
                    <!-- from remixicon-->
                    <x-sidebar-menu icon="ri-file-edit-line" title="Crud Data">
                    <i class="ri-arrow-right-s-line ml-auto group-[.active]:rotate-90"></i>
                    </x-sidebar-menu>
                </a>
                        <x-crud-link route="{{route('mahasiswa.index')}}" title="Mahasiswa"/>
                        <x-crud-link route="{{route('dosen.index')}}" title="Dosen"/>
            </li>
            <li class="mb-1 group">
                <a href="#" class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white">
                    <!-- from remixicon-->
                    <x-sidebar-menu icon="ri-settings-2-line" title="Setting"/>
                </a>
            </li>
            <li class="mb-1 group">
                <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();" class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white cursor-pointer">
                    <!-- from remixicon-->
                    <x-sidebar-menu icon="ri-logout-box-line" title="Logout" />
                </a>
                </form>
            </li>
        </ul>
</div>
