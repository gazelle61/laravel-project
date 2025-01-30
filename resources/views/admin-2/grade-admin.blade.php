<x-admin_layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-200">
        <thead>
            <tr>
                <th>Num</th>
                <th>Grade Name</th>
                <th>Student</th>
                <th>Department</th>
              </tr>
        </thead>
        <tbody>
            @foreach ($grades as $grade)
            <tr class="hover:bg-gray-100">
                <td class="py-2 px-4 border-b">{{ $grade->id }}</td>
                <td class="py-2 px-4 border-b">{{ $grade->name }}</td>
                <td class="py-2 px-4 border-b">
                    @foreach ($grade->students as $student )
                        <ul>
                            <li>{{ $student->name }}</li>
                        </ul>
                    @endforeach
                </td>
                <td>{{$grade->department->name}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
    </div>
</x-admin_layout>
