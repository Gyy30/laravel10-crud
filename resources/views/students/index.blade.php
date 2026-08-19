<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Siswa</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body{
            font-family:'Poppins',sans-serif;
        }

        @keyframes fadeUp{
            from{
                opacity:0;
                transform:translateY(30px);
            }
            to{
                opacity:1;
                transform:translateY(0);
            }
        }

        .animate-fade{
            animation:fadeUp .8s ease;
        }
    </style>
</head>

<body class="min-h-screen bg-gradient-to-br from-red-100 via-white to-red-200 text-gray-800">

<div class="container mx-auto px-6 py-10 animate-fade">

    <div class="flex items-center justify-between mb-8">

        <div>
            <h1 class="text-4xl font-bold text-red-600">
                Daftar Siswa
            </h1>

            <p class="text-gray-500 mt-2">
                Kelola data siswa dengan mudah.
            </p>
        </div>

        <a href="{{ route('students.create') }}"
           class="px-6 py-3 rounded-xl bg-gradient-to-r from-red-500 to-red-700
                  text-white font-semibold shadow-lg
                  hover:scale-105 hover:shadow-2xl
                  transition duration-300">
            + Tambah Siswa
        </a>

    </div>

    @if(session('success'))
        <div class="mb-6 rounded-xl border border-green-300 bg-green-100 p-4 text-green-700 shadow">
            {{ session('success') }}
        </div>
    @endif

    <div class="bg-white/80 backdrop-blur-md rounded-3xl shadow-2xl border border-white overflow-hidden">

        <div class="overflow-x-auto">

            <table class="min-w-full">

                <thead class="bg-gradient-to-r from-red-500 to-red-700 text-white">

                    <tr>

                        <th class="px-6 py-4 text-left uppercase tracking-wider text-sm">
                            ID
                        </th>

                        <th class="px-6 py-4 text-left uppercase tracking-wider text-sm">
                            Nama
                        </th>

                        <th class="px-6 py-4 text-left uppercase tracking-wider text-sm">
                            Kelas
                        </th>

                        <th class="px-6 py-4 text-center uppercase tracking-wider text-sm">
                            Aksi
                        </th>

                    </tr>

                </thead>

                <tbody>

                @forelse($students as $student)

                    <tr class="border-b hover:bg-red-50 transition duration-300">

                        <td class="px-6 py-5">

                            <span class="px-3 py-1 rounded-full bg-red-100 text-red-600 font-semibold">
                                #{{ $student->id }}
                            </span>

                        </td>

                        <td class="px-6 py-5 font-medium">
                            {{ $student->name }}
                        </td>

                        <td class="px-6 py-5">
                            {{ $student->class }}
                        </td>

                        <td class="px-6 py-5 text-center">

                            <a href="{{ route('students.edit', $student) }}"
                               class="inline-block px-4 py-2 rounded-lg bg-blue-500 text-white shadow hover:bg-blue-600 hover:scale-105 transition">
                                Edit
                            </a>

                            <form
                                action="{{ route('students.destroy', $student) }}"
                                method="POST"
                                class="inline-block"
                                onsubmit="return confirm('Yakin ingin menghapus siswa ini?');">

                                @csrf
                                @method('DELETE')

                                <button
                                    type="submit"
                                    class="px-4 py-2 rounded-lg bg-red-500 text-white shadow hover:bg-red-600 hover:scale-105 transition ml-2">
                                    Hapus
                                </button>

                            </form>

                        </td>

                    </tr>

                @empty

                    <tr>

                        <td colspan="4" class="py-12 text-center text-gray-500">

                            <div class="text-6xl mb-3">
                                📚
                            </div>

                            <p class="text-lg font-semibold">
                                Belum ada data siswa
                            </p>

                            <p class="text-sm text-gray-400 mt-2">
                                Silakan tambahkan data siswa terlebih dahulu.
                            </p>

                        </td>

                    </tr>

                @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

</body>
</html>