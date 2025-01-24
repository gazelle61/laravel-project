<x-admin_layout>
    <x-slot:title>{{ $title }}</x-slot>
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-200">
            <thead>
            <tr class="bg-gray-200">
                <th class="py-2 px-4 border-b">No</th>
                <th class="py-2 px-4 border-b">Grade Name</th>
                <th class="py-2 px-4 border-b">Department</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($grades as $grade)
                <tr class="hover:bg-gray-100">
                    <td class="py-2 px-4 border-b">{{ $grade->id }}</td>
                    <td class="py-2 px-4 border-b">{{ $grade->name }}</td>
                    <td class="py-2 px-4 border-b">{{ $grade->department->name }}</td>
                    <td class="py-2 px-4 border-b">
                        <a href="/detail"
                            class="inline-block px-6 py-2 bg-blue-500 font-semibold rounded-lg shadow hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400">
                            Detail
                        </a>
                         <button
                            class="inline-block px-6 py-2 bg-blue-500 font-semibold rounded-lg shadow hover:bg-blue-600 focus:outline-none"
                            onclick="openModal('{{ $grade['name'] }}', '{{ $grade['department'] }}')">
                            Detail
                        </button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <!-- Modal -->
    <div id="modal" class="fixed inset-0 flex items-center justify-center z-50 hidden">
        <div class="fixed inset-0 bg-black opacity-50"></div>
        <div class="bg-white rounded-lg shadow-lg p-6 z-10 max-w-md w-full">
            <h2 class="text-xl font-bold mb-4" id="modal-title">Grade Detail</h2>
            <p id="modal-name" class="mb-2"></p>
            <p id="modal-department" class="mb-2"></p>
            <button id="closeModal" class="px-4 py-2 bg-gray-500 rounded-lg hover:bg-gray-600">
                Close
            </button>
        </div>
    </div>

    <script>
        function openModal(name, department) {
            document.getElementById('modal-name').textContent = 'Name: ' + name;
            document.getElementById('modal-department').textContent = 'Department: ' + department;
            document.getElementById('modal').classList.remove('hidden');
        }

        document.getElementById('closeModal').addEventListener('click', function() {
            document.getElementById('modal').classList.add('hidden');
        });
    </script>

</x-admin-layout>
