<x-layout>
    <x-slot name="title">{{ $title }}</x-slot>

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-200">
            <thead>
                <tr class="bg-gray-200 text-gray-700 uppercase text-sm leading-normal">
                    <th class="py-2 px-4 border-b">ID</th>
                    <th class="py-2 px-4 border-b">Name</th>
                    <th class="py-2 px-4 border-b">Description</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($departments as $department)
                    <tr class="hover:bg-gray-100">
                        <td class="py-2 px-4 border-b">{{ $department->id }}</td>
                        <td class="py-2 px-4 border-b">{{ $department->name }}</td>
                        <td class="py-2 px-4 border-b">{{ $department->desc }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>
