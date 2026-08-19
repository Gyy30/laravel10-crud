<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail Siswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-900 font-sans">
<div class="container mx-auto px-4 py-8">
    <div class="bg-white rounded-lg shadow p-6">
        <h1 class="text-xl font-semibold mb-4">Detail Siswa</h1>
        <p><strong>Nama:</strong> {{ $student->name }}</p>
        <p><strong>Kelas:</strong> {{ $student->class }}</p>
        <a href="{{ route('students.index') }}" class="mt-4 inline-block text-red-600">Kembali</a>
    </div>
</div>
</body>
</html>
