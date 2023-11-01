<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<header>
    @include('layouts.sidebar')
</header>
<body class="bg-gray-100">
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
                <a href="{{route('mahasiswa.add')}}" class="bg-blue-500 text-white px-4 py-2 rounded">Tambah Mahasiswa</a>
            </div>
            <div class="my-4">
                <a href="/admin" class="bg-red-500 text-white px-4 py-2 rounded">Kembali</a>
            </div>
        </div>
        <table class="w-full bg-white rounded-lg overflow-hidden">
            <thead class="bg-blue-500 text-white">
                <tr>
                    <th class="px-2 py-2">NPM</th>
                    <th class="px-2 py-2">Nama</th>
                    <th class="px-2 py-2">Kelas</th>
                    <th class="px-2 py-2">Jurusan</th>
                    <th class="px-2 py-2">Edit</th>
                    <th class="px-2 py-2">Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $mahasiswas as $mahasiswa )
                    <tr class="{{ $loop->iteration % 2 == 0 ? 'bg-gray-100' : '' }}">
                        <td class="border px-4 py-2">{{$mahasiswa->npm}}</td>
                        <td class="border px-4 py-2">{{$mahasiswa->nama}}</td>
                        <td class="border px-4 py-2">{{$mahasiswa->kelas}}</td>
                        <td class="border px-4 py-2">{{$mahasiswa->jurusan}}</td>
                        <td class="border px-4 py-2">
                            <a href="{{route('mahasiswa.edit', ['mahasiswa' => $mahasiswa])}}" class="bg-yellow-500 text-white px-4 py-1 rounded">Edit</a>
                        </td>
                        <td class="border px-4 py-2">
                            <form method="post" action="{{route('mahasiswa.destroy', ['mahasiswa' => $mahasiswa] )}}" >
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
</body>
</html>
