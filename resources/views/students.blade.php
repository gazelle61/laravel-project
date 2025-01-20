  <x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="overflow-x-auto">
    <table class="min-w-full bg-white border border-gray-200">
        <thead>
            <tr>
                <th>Num</th>
                <th>Name</th>
                <th>Grade</th>
                <th>Department</th>
                <th>Email</th>
                <th>Alamat</th>
              </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
            <tr class="hover:bg-gray-100">
                <td class="py-2 px-4 border-b">{{ $student->id }}</td>
                <td class="py-2 px-4 border-b">{{ $student->name }}</td>
                <td class="py-2 px-4 border-b">{{ $student->grade->name }}</td>
                <td class="py-2 px-4 border-b">{{ $student->department->name }}</td>
                <td class="py-2 px-4 border-b">{{ $student->email }}</td>
                <td class="py-2 px-4 border-b">{{ $student->address }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</x-layout>
