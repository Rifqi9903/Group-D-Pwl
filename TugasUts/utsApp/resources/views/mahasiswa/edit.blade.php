<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto px-4">
        <x-head-title title="Edit Mahasiswa" />
        <div>
            @if($errors->any())
            <ul class="bg-red-500 text-white px-4 py-2 rounded">
                @foreach ($errors->all() as $errors)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
            @endif
        </div>
        <form method="post" action="{{route('mahasiswa.update', ['mahasiswa' => $mahasiswa])}}" class="bg-white p-6 rounded-lg">
            @csrf
            @method('put')
            <x-crud-form title="NPM" type="number" name="npm" placeholder="npm" value="{{$mahasiswa->npm}}" />
            <x-crud-form title="Nama" type="text" name="nama" placeholder="nama" value="{{$mahasiswa->nama}}" />
            <x-crud-form title="Kelas" type="text" name="kelas" placeholder="kelas" value="{{$mahasiswa->kelas}}"/>
            <x-crud-form title="Jurusan" type="text" name="jurusan" placeholder="jurusan" value="{{$mahasiswa->jurusan}}"/>
            <div class="flex space-x-4">
                <div class="">
                    <input type="submit" value="Update" class="bg-blue-500 text-white px-4 py-2 rounded cursor-pointer" />
                </div>
                <div class="mt-2">
                    <x-crud-button class="bg-red-500 " href="{{route('mahasiswa.index')}}" title="Kembali" />
                </div>
            </div>
        </form>
    </div>
</body>
</html>
