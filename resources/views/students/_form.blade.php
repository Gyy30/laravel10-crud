<div class="space-y-4">
    <div>
        <label class="block text-sm font-medium text-gray-700">Nama</label>
        <input type="text" name="name" value="{{ old('name', $student->name ?? '') }}" class="mt-1 block w-full rounded border-gray-300 shadow-sm" required>
        @error('name')<p class="text-sm text-red-500 mt-1">{{ $message }}</p>@enderror
    </div>

    <div>
        <label class="block text-sm font-medium text-gray-700">Kelas</label>
        <input type="text" name="class" value="{{ old('class', $student->class ?? '') }}" class="mt-1 block w-full rounded border-gray-300 shadow-sm" required>
        @error('class')<p class="text-sm text-red-500 mt-1">{{ $message }}</p>@enderror
    </div>

    <div class="pt-4">
        <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700">Simpan</button>
        <a href="{{ route('students.index') }}" class="ml-2 text-gray-600">Batal</a>
    </div>
</div>
