<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.header')
</head>
<header>
    @include('layouts.sidebar')
</header>
<body class="bg-gray-100">
    @include('layouts.sidebar')
    <x-topbar title="Crud Data" slash="/" subTitle="Dosen" />
<div class="w-[cacl(100%-256px)] ml-64">
    <div class="container mx-auto px-10">
        <x-head-title title="Dosen" />
        <div>
            @if(session()->has('success'))
                <div class="bg-green-500 text-white px-4 py-2 rounded">
                    {{session('success')}}
                </div>
            @endif
        </div>
        <div class="flex justify-between">
            <div class="my-4">
                <x-crud-button class="bg-blue-500 " href="{{route('dosen.add')}}" title="Tambah Dosen" />
            </div>
            <div class="my-4">
                <x-crud-button class="bg-red-500 " href="/admin" title="Kembali" />
            </div>
        </div>
        <table class="w-full bg-white rounded-lg overflow-hidden">
            <thead class="bg-blue-500 text-white">
                <tr>
                    <th class="px-3 py-2">NIDN</th>
                    <th class="px-3 py-2">Nama</th>
                    <th class="px-3 py-2">Edit</th>
                    <th class="px-3 py-2">Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $dosens as $dosen )
                    <tr class="{{ $loop->iteration % 2 == 0 ? 'bg-gray-100' : '' }}">
                        <td class="border px-3 py-2">{{$dosen->nidn}}</td>
                        <td class="border px-3 py-2">{{$dosen->nama}}</td>
                        <td class="border px-3 py-2">
                            <x-crud-button class="bg-yellow-500 " href="{{route('dosen.edit', ['dosen' => $dosen])}}" title="Edit" />
                        </td>
                        <td class="border px-3 py-2">
                            <form method="post" action="{{route('dosen.destroy', ['dosen' => $dosen] )}}" >
                                @csrf
                                @method('delete')
                                <input type="submit" value="Delete" class="bg-red-500 text-white px-4 py-1 rounded cursor-pointer">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
    @include('layouts.footer')
</body>
</html>
