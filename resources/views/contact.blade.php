<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <p>Name: {{ $name }}</p>
    <p>Kelas: {{ $class }}</p>

    <!-- Membungkus LinkedIn dan Repository dalam satu div -->
    <div class="flex-container">
        <p>LinkedIn Profile: <a href="{{ $linkedin }}">Visit LinkedIn</a></p>
        <p>Repository: <a href="{{ $repository }}">Visit Repository</a></p>
    </div>
</x-layout>
