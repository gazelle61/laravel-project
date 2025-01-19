<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css','resources/js/app.js'])
    {{-- css font --}}
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

    {{-- alpine js --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="h-full">

    <div class="antialiased bg-gray-50 dark:bg-gray-900">
        <x-admin_navbar/>
        <x-admin_sidebar/>
    <main class="p-4 md:ml-64 h-auto pt-20">
        <div class="mx-auto max-w-7x1 px-4 py-6 sm:px-6 lg:px-8">
             {{$slot}}
        </div>
    </main>
  </div>

</body>
</html>
