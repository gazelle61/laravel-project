<x-admin_layout>

    <section class="bg-yellow dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
            <h2 class="mb-4 text-xl font-bold text-gray-900">Add a new grade</h2>
            <form action="/admin/grades/store" method="post">
                @csrf
                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                    <div class="sm:col-span-2">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                        <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type grade name" required="">
                    </div>

                    <div>
                        <label for="grade" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Grade/class</label>
                        <select id="grade_id" name="grade_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="">Choose a grade</option>
                            @foreach($grades as $grade)
                                <option value="{{ $grade->id }}">{{ $grade->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <button type="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center bg-yellow-500 rounded-lg focus:ring-4 focus:ring-yellow-200 dark:focus:ring-yellow-600 hover:bg-yellow-800">
                    Add Grade
                </button>
            </form>
        </div>
    </section>
</x-admin_layout>
