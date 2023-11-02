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
    @include('layouts.body')
<div class="w-[cacl(100%-256px)] ml-64">
    <div class="container mx-auto px-10">
        <h1 class="text-4xl font-bold my-8">Product</h1>
        <div>
            @if(session()->has('success'))
                <div class="bg-green-500 text-white px-4 py-2 rounded">
                    {{session('success')}}
                </div>
            @endif
        </div>
        <div class="flex justify-between">
            <div class="my-4">
                <a href="{{route('dosen.add')}}" class="bg-blue-500 text-white px-4 py-2 rounded">Tambah Dosen</a>
            </div>
            <div class="my-4">
                <a href="/admin" class="bg-red-500 text-white px-4 py-2 rounded">Kembali</a>
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
                            <a href="{{route('dosen.edit', ['dosen' => $dosen])}}" class="bg-yellow-500 text-white px-3 py-1 rounded">Edit</a>
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
